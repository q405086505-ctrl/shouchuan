# Cupshe Clone - 网站复刻项目

## 项目概述

这是一个1:1复刻Cupshe跨境电商泳装品牌网站的前端项目。

## 项目结构

```
cupshe-clone/
├── index.html              # 主页面
├── css/
│   ├── styles.css          # 主样式文件
│   ├── header.css          # 头部样式
│   ├── footer.css          # 底部样式
│   ├── components.css      # 组件样式
│   └── responsive.css      # 响应式样式
├── js/
│   └── main.js             # 主JavaScript文件
└── project-info.md         # 项目说明
```

## 技术栈

- **HTML5**: 语义化标签，SEO友好
- **CSS3**: 
  - CSS变量（自定义属性）
  - Flexbox和Grid布局
  - 响应式设计
  - 动画和过渡效果
- **JavaScript**: 
  - 原生ES6+
  - Swiper轮播库
  - Intersection Observer API
- **字体**: Google Fonts (Poppins)

## 功能特性

### 头部导航
- 顶部公告栏
- Logo和用户操作按钮
- 下拉式Mega Menu导航菜单
- 搜索弹窗
- 用户账户下拉菜单

### 主要内容
- Hero Banner轮播
- 分类网格展示
- 产品卡片组件
  - 悬停效果
  - 收藏按钮
  - 颜色选择
  - 价格显示
- 新品推荐区域
- Instagram图片墙

### 底部
- 多列链接布局
- 社交媒体图标
- 应用下载按钮
- 支付方式图标

### 交互功能
- 返回顶部按钮
- 产品收藏功能
- 搜索模态框
- Toast通知
- 滚动动画效果

## 响应式断点

- **大桌面**: 1440px+
- **桌面**: 1200px - 1439px
- **小桌面/大平板**: 992px - 1199px
- **平板**: 768px - 991px
- **大手机**: 576px - 767px
- **小手机**: < 575px
- **超小手机**: < 374px

## 如何预览

### 方法1: 直接打开
双击 `index.html` 文件在浏览器中打开

### 方法2: 使用本地服务器
```bash
# 使用Python
cd cupshe-clone
python -m http.server 8080

# 或使用Node.js
npx serve . -p 8080
```

### 方法3: 使用VS Code Live Server
1. 安装Live Server扩展
2. 右键点击 `index.html`
3. 选择 "Open with Live Server"

## 颜色方案

```css
--color-primary: #04040C;        /* 主色 */
--color-secondary: #1F1F1F;      /* 次要色 */
--color-accent: #ED3D59;         /* 强调色 */
--color-background: #FFFFFF;      /* 背景色 */
--color-background-alt: #FCF7F2; /* 替代背景色 */
--color-text: #04040C;           /* 文字色 */
--color-text-light: #666666;     /* 浅色文字 */
--color-border: #D8D8D8;         /* 边框色 */
```

## 字体大小

```css
--font-size-xs: 12px;
--font-size-sm: 13px;
--font-size-base: 14px;
--font-size-md: 16px;
--font-size-lg: 18px;
--font-size-xl: 20px;
--font-size-2xl: 24px;
--font-size-3xl: 32px;
--font-size-4xl: 40px;
```

## 浏览器支持

- Chrome (最新版)
- Firefox (最新版)
- Safari (最新版)
- Edge (最新版)
- 移动端浏览器

## 性能优化

- CSS变量减少重复代码
- 图片懒加载
- 防抖和节流函数
- Intersection Observer实现滚动动画
- 最小化重排和重绘

## 注意事项

1. 图片使用了占位符URL，实际使用时需要替换为真实图片
2. 所有链接当前为 `#` 占位符
3. 表单提交为模拟功能
4. 收藏功能为前端模拟，需要后端支持持久化

## 后续优化建议

1. 添加更多页面（产品列表、产品详情、购物车等）
2. 实现真实的API数据交互
3. 添加状态管理（如购物车状态）
4. 实现用户认证功能
5. 添加国际化支持
6. 优化SEO（添加更多meta标签）
7. 添加PWA支持

## 许可证

本项目仅供学习和研究使用。
