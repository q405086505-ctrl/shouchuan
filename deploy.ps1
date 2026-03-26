# SHOUCHUAN 网站快速部署脚本
# 使用方法：在 PowerShell 中运行 .\deploy.ps1

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  SHOUCHUAN 网站部署工具" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# 检查 Git 是否安装
try {
    $gitVersion = git --version
    Write-Host "[✓] Git 已安装：$gitVersion" -ForegroundColor Green
} catch {
    Write-Host "[✗] Git 未安装，请先安装 Git" -ForegroundColor Red
    Write-Host "下载地址：https://git-scm.com/download/win" -ForegroundColor Yellow
    exit
}

# 检查是否已初始化 Git 仓库
if (Test-Path ".git") {
    Write-Host "[✓] Git 仓库已初始化" -ForegroundColor Green
} else {
    Write-Host "[*] 初始化 Git 仓库..." -ForegroundColor Yellow
    git init
    Write-Host "[✓] Git 仓库初始化完成" -ForegroundColor Green
}

# 配置 Git 用户信息（如果未配置）
$gitUser = git config user.name
if ([string]::IsNullOrEmpty($gitUser)) {
    Write-Host "[*] 配置 Git 用户信息" -ForegroundColor Yellow
    $name = Read-Host "  请输入你的 Git 用户名"
    $email = Read-Host "  请输入你的 Git 邮箱"
    git config user.name $name
    git config user.email $email
    Write-Host "[✓] Git 用户信息配置完成" -ForegroundColor Green
}

# 添加所有文件
Write-Host ""
Write-Host "[*] 添加文件到暂存区..." -ForegroundColor Yellow
git add .
Write-Host "[✓] 文件添加完成" -ForegroundColor Green

# 检查是否有更改
$status = git status --porcelain
if ([string]::IsNullOrEmpty($status)) {
    Write-Host "[!] 没有检测到更改" -ForegroundColor Yellow
} else {
    # 提交更改
    Write-Host "[*] 提交更改..." -ForegroundColor Yellow
    $commitMessage = Read-Host "  请输入提交信息（或直接回车使用默认信息）"
    if ([string]::IsNullOrEmpty($commitMessage)) {
        $commitMessage = "Update website - $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"
    }
    git commit -m $commitMessage
    Write-Host "[✓] 提交完成：$commitMessage" -ForegroundColor Green
}

# 检查远程仓库
$remoteUrl = git remote get-url origin 2>$null
if ([string]::IsNullOrEmpty($remoteUrl)) {
    Write-Host ""
    Write-Host "[*] 未配置远程仓库" -ForegroundColor Yellow
    Write-Host "请按照以下步骤操作：" -ForegroundColor Cyan
    Write-Host "1. 在 GitHub 创建新仓库：https://github.com/new" -ForegroundColor White
    Write-Host "2. 复制仓库地址" -ForegroundColor White
    Write-Host ""
    $repoUrl = Read-Host "  粘贴 GitHub 仓库地址"
    
    # 清理 URL（去除可能的 .git 后缀）
    $repoUrl = $repoUrl.TrimEnd(".git")
    
    git remote add origin "$repoUrl.git"
    Write-Host "[✓] 远程仓库配置完成" -ForegroundColor Green
    $remoteUrl = "$repoUrl.git"
} else {
    Write-Host "[✓] 远程仓库已配置：$remoteUrl" -ForegroundColor Green
}

# 设置默认分支
Write-Host ""
Write-Host "[*] 设置默认分支为 main..." -ForegroundColor Yellow
git branch -M main 2>$null
Write-Host "[✓] 分支设置完成" -ForegroundColor Green

# 推送到 GitHub
Write-Host ""
Write-Host "[*] 推送到 GitHub..." -ForegroundColor Yellow
git push -u origin main

if ($LASTEXITCODE -eq 0) {
    Write-Host "[✓] 推送成功！" -ForegroundColor Green
} else {
    Write-Host "[!] 推送失败，可能是凭证问题" -ForegroundColor Yellow
    Write-Host "请检查 GitHub 登录状态后重新运行脚本" -ForegroundColor Yellow
}

# 显示下一步操作
Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  部署准备完成！" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "下一步操作：" -ForegroundColor Cyan
Write-Host ""
Write-Host "1. 访问 Netlify 部署：" -ForegroundColor White
Write-Host "   https://app.netlify.com/new" -ForegroundColor Yellow
Write-Host ""
Write-Host "2. 选择 'Import an existing project'" -ForegroundColor White
Write-Host "3. 连接 GitHub 并选择你的仓库" -ForegroundColor White
Write-Host "4. 设置发布目录为：cupshe-clone" -ForegroundColor White
Write-Host "5. 点击 'Deploy site'" -ForegroundColor White
Write-Host ""
Write-Host "详细指南请查看：DEPLOYMENT_GUIDE.md" -ForegroundColor Cyan
Write-Host ""
Write-Host "按任意键退出..." -ForegroundColor Gray
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
