# 🚀 SHOUCHUAN 网站部署指南

## 📋 部署到 Netlify + Snipcart（完整流程）

### 第一步：准备 GitHub 仓库（5 分钟）

1. **打开 PowerShell**，进入项目目录：
```powershell
cd "d:\独立站\手串"
```

2. **初始化 Git 并上传到 GitHub**：
```powershell
# 初始化 Git 仓库
git init

# 添加所有文件
git add .

# 提交
git commit -m "Initial commit - SHOUCHUAN e-commerce site"

# 在 GitHub 创建新仓库后，关联远程仓库
# 替换为你的 GitHub 仓库地址
git remote add origin https://github.com/你的用户名/shouchuan.git
git branch -M main
git push -u origin main
```

---

### 第二步：部署到 Netlify（10 分钟）

#### 方法 A：通过 GitHub 自动部署（推荐）

1. **访问 Netlify**
   - 打开 [netlify.com](https://netlify.com)
   - 点击 "Sign Up" 注册账号（推荐使用 GitHub 登录）

2. **创建新站点**
   - 登录后点击 "Add new site"
   - 选择 "Import an existing project"
   - 选择 "GitHub" 并授权 Netlify 访问你的 GitHub

3. **选择仓库**
   - 在搜索框输入 `shouchuan`
   - 选择你的仓库

4. **配置构建设置**
   - **Branch to deploy**: `main`
   - **Build command**: 留空（静态网站不需要）
   - **Publish directory**: `cupshe-clone`
   - **Functions directory**: 留空

5. **点击 "Deploy site"**
   - Netlify 会自动开始部署
   - 等待 1-2 分钟，看到 "Published" 状态

6. **获取你的网站链接**
   - 默认链接格式：`https://随机名称.netlify.app`
   - 点击 "Site settings" → "Change site name" 可以自定义

#### 方法 B：直接拖拽部署（更快，无需 Git）

1. 访问 [app.netlify.com/drop](https://app.netlify.com/drop)
2. 直接把 `cupshe-clone` 文件夹拖到网页上
3. 立即生成访问链接！

---

### 第三步：配置 Snipcart 购物车（15 分钟）

1. **注册 Snipcart**
   - 访问 [snipcart.com](https://snipcart.com)
   - 点击 "Start Free Trial"
   - 填写邮箱、密码注册

2. **获取 API Key**
   - 登录后进入 Dashboard
   - 点击 "API Keys"
   - 复制 **Public API Key**

3. **修改 index.html**
   - 打开 `d:\独立站\手串\cupshe-clone\index.html`
   - 找到第 107 行左右：
   ```html
   publicApiKey: 'YOUR_SNIPCART_PUBLIC_API_KEY',
   ```
   - 替换为你的真实 API Key：
   ```html
   publicApiKey: '你的实际 API 密钥',
   ```

4. **配置 Snipcart 设置**
   - 在 Snipcart Dashboard 点击 "Settings"
   - **General**:
     - Store URL: 你的 Netlify 网站地址
     - Business Email: 你的邮箱
     - Currency: `USD`
     - Language: `English`
   
   - **Shipping**:
     - 添加美国（US）和加拿大（CA）
     - 设置运费规则（例如：满$50 包邮）

5. **测试购物车**
   - 在你的网站点击任意产品
   - 应该弹出购物车侧边栏
   - 点击 "Checkout" 测试结账流程

---

### 第四步：配置 Stripe 支付（20 分钟）

1. **注册 Stripe**
   - 访问 [stripe.com](https://stripe.com)
   - 点击 "Sign up"
   - 填写：
     - 公司邮箱
     - 公司信息（可以用个人名义）
     - 银行账户信息（用于收款）

2. **完成身份验证**
   - 上传身份证件
   - 等待审核（通常几分钟到几小时）

3. **连接 Stripe 到 Snipcart**
   - 在 Snipcart Dashboard → "Payment Providers"
   - 选择 "Stripe"
   - 点击 "Connect"
   - 登录 Stripe 并授权

4. **测试支付**
   - 在 Snipcart 后台开启 "Test Mode"
   - 使用 Stripe 测试卡号：
     - 卡号：`4242 4242 4242 4242`
     - 有效期：任意未来日期
     - CVV: `123`
     - ZIP: `12345`

---

### 第五步：绑定自定义域名（可选，10 分钟）

1. **购买域名**
   - 推荐：Namecheap, GoDaddy, Google Domains
   - 价格：约 $12-15/年
   - 建议域名：`shouchuan.com`, `shouchuanjewelry.com`

2. **在 Netlify 添加域名**
   - Netlify Dashboard → "Domain settings"
   - 点击 "Add custom domain"
   - 输入你的域名

3. **配置 DNS**
   - Netlify 会显示 DNS 配置信息
   - 登录你的域名注册商
   - 添加/修改 DNS 记录：
     ```
     类型：A
     主机：@
     值：75.2.60.5
     TTL: 自动
     
     类型：CNAME
     主机：www
     值：你的网站名.netlify.app
     TTL: 自动
     ```

4. **启用 HTTPS**
   - Netlify 自动提供免费的 HTTPS
   - 等待 DNS 生效（几分钟到几小时）
   - HTTPS 证书会自动签发

---

### 第六步：后续更新

每次修改代码后：

```powershell
# 1. 保存修改
# 2. 提交更改
git add .
git commit -m "修改描述"

# 3. 推送到 GitHub
git push origin main

# 4. Netlify 会自动重新部署（等待 1-2 分钟）
```

---

## 💰 费用明细

| 服务 | 费用 | 说明 |
|------|------|------|
| **Netlify** | $0 | 免费套餐：100GB 流量/月 |
| **Snipcart** | $0 + 2% | 免费试用，出单后收 2% 手续费 |
| **Stripe** | 2.9% + 30¢ | 每笔交易的手续费 |
| **域名** | $12-15/年 | 可选，但建议购买 |

**总成本：$0 固定月费，只在出单时付费约 5%**

---

## 🎯 测试清单

上线前请确认：

- [ ] 网站可以正常访问
- [ ] 所有产品图片显示正常
- [ ] 点击产品可以添加到购物车
- [ ] 购物车可以正常打开和关闭
- [ ] 结账流程可以走通
- [ ] 支付测试成功
- [ ] 移动端显示正常
- [ ] 联系邮箱正确

---

## 🔧 常见问题

### Q1: Snipcart 购物车不显示？
**A**: 检查：
1. API Key 是否正确填写
2. 产品链接是否有 `snipcart-add-item` 类名
3. 浏览器控制台是否有错误

### Q2: 支付失败？
**A**: 确认：
1. Stripe 账户已通过验证
2. Snipcart 已正确连接 Stripe
3. 测试模式使用测试卡号

### Q3: Netlify 部署失败？
**A**: 检查：
1. `cupshe-clone` 文件夹路径正确
2. 没有语法错误
3. 查看 Netlify 部署日志

---

## 📞 技术支持

- **Netlify 支持**: [netlify.com/support](https://netlify.com/support)
- **Snipcart 文档**: [docs.snipcart.com](https://docs.snipcart.com)
- **Stripe 支持**: [stripe.com/support](https://stripe.com/support)

---

## 🎉 恭喜上线！

现在你的手串电商网站已经正式运营了！

**下一步建议：**
1. 在社交媒体分享你的网站
2. 设置 Google Analytics 追踪访问数据
3. 考虑投放 Facebook/Instagram 广告
4. 添加更多产品
5. 优化产品描述和图片

**祝生意兴隆！** 🎊
