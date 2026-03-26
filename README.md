# SHOUCHUAN - 手串电商网站

> 面向北美市场的天然水晶手串与佛珠饰品电商网站

## 🎯 项目概述

这是一个完整的电商网站，已集成：
- ✅ **Snipcart 购物车系统**
- ✅ **美元定价**
- ✅ **英文界面**
- ✅ **SEO 优化**
- ✅ **响应式设计**
- ✅ **支付功能就绪**

## 📁 项目结构

```
手串/
├── cupshe-clone/           # 网站主目录
│   ├── index.html          # 主页面（已配置 Snipcart）
│   ├── css/                # 样式文件
│   ├── js/                 # JavaScript 文件
│   └── images/             # 图片资源
├── netlify.toml            # Netlify 部署配置
├── deploy.ps1              # 一键部署脚本
├── DEPLOYMENT_GUIDE.md     # 详细部署指南
└── README.md               # 本文件
```

## 🚀 快速开始

### 方法 1：使用部署脚本（推荐）

```powershell
cd "d:\独立站\手串"
.\deploy.ps1
```

然后按照提示操作即可。

### 方法 2：手动部署

1. **上传到 GitHub**
```powershell
cd "d:\独立站\手串\cupshe-clone"
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/你的用户名/仓库名.git
git push -u origin main
```

2. **部署到 Netlify**
   - 访问 [netlify.com](https://netlify.com)
   - 创建新站点并从 GitHub 导入
   - 设置发布目录：`cupshe-clone`
   - 点击部署

3. **配置 Snipcart**
   - 注册 [snipcart.com](https://snipcart.com)
   - 获取 API Key
   - 在 `index.html` 中替换 `YOUR_SNIPCART_PUBLIC_API_KEY`
   - 配置支付和运费设置

## 💰 产品列表

网站已包含 8 个产品：

| 产品 | SKU | 价格 | 描述 |
|------|-----|------|------|
| 天然紫水晶手串 | amethyst-bracelet | $49.99 | 巴西天然紫水晶 |
| 缅甸翡翠手串 | jade-bracelet | $179.99 | A 货翡翠 |
| 印度小叶紫檀 | red-sandalwood-bracelet | $74.99 | 佛家七宝 |
| 保山南红玛瑙 | southern-red-agate-bracelet | $125.99 | 中国红 |
| 星月菩提手串 | star-moon-bodhi-bracelet | $45.99 | 高密老料 |
| 波罗的海蜜蜡 | baltic-amber-bracelet | $219.99 | 千年琥珀 |
| 湖北绿松石 | turquoise-bracelet | $84.99 | 成功之石 |
| 尼泊尔金刚菩提 | vajra-bodhi-bracelet | $95.99 | 力量象征 |

## 🛠️ 配置说明

### Snipcart 配置

在 `cupshe-clone/index.html` 第 107 行：

```javascript
window.SnipcartSettings = {
  publicApiKey: 'YOUR_SNIPCART_PUBLIC_API_KEY', // 替换为你的 API Key
  loadStrategy: 'on-demand',
  currency: 'USD',
  language: 'en',
  shipping: {
    countries: ['US', 'CA'],
    restrictToShippingCountries: true
  }
};
```

### 添加新产品

使用以下格式添加产品：

```html
<a href="#" class="snipcart-add-item"
   data-item-id="unique-product-id"
   data-item-price="49.99"
   data-item-url="/"
   data-item-description="Product description"
   data-item-image="/images/product.jpg"
   data-item-name="Product Name">
  <!-- 产品图片和标题 -->
</a>
```

## 📊 费用结构

| 服务 | 月费 | 交易费 | 说明 |
|------|------|--------|------|
| Netlify | $0 | $0 | 100GB 流量/月 |
| Snipcart | $0 | 2% | 月销售额<1000 刀免费 |
| Stripe | $0 | 2.9% + 30¢ | 每笔交易 |
| **总计** | **$0** | **~5%** | **出单才付费** |

## 🎨 自定义

### 修改价格

在 `index.html` 中找到对应产品，修改：
- `data-item-price`: 实际售价
- `data-item-original-price`: 原价（可选，用于显示折扣）
- HTML 中的价格显示

### 修改运费

在 Snipcart 后台：
1. Settings → Shipping
2. 添加运费规则
3. 设置满额包邮阈值

### 修改配色

在 `css/styles.css` 中修改 CSS 变量：

```css
:root {
  --color-primary: #04040C;
  --color-accent: #ED3D59;
  /* ... */
}
```

## 🔍 SEO 优化

网站已包含：
- ✅ Meta 标签（标题、描述、关键词）
- ✅ Open Graph 标签（社交媒体分享）
- ✅ Twitter Card 标签
- ✅ 结构化数据（JSON-LD）
- ✅ 语义化 HTML5 标签
- ✅ 图片 Alt 属性

## 📱 响应式设计

支持的设备：
- 桌面：1440px+
- 笔记本：1200px - 1439px
- 平板：768px - 1199px
- 手机：< 767px

## 🌐 部署平台

### 推荐：Netlify
- 免费套餐充足
- 自动 HTTPS
- 全球 CDN
- 一键部署

### 备选方案
- **Vercel**: 类似 Netlify，性能优秀
- **GitHub Pages**: 完全免费，但功能有限
- **Cloudflare Pages**: 免费，速度快

## 📝 更新日志

### v1.0.0 - 2026-03-26
- ✅ 完成 Snipcart 购物车集成
- ✅ 价格从人民币改为美元
- ✅ 界面完全英文化
- ✅ 添加 8 个产品
- ✅ 配置 SEO 元标签
- ✅ 创建部署脚本和文档

## 🤝 支持

遇到问题？查看以下资源：

- **部署指南**: [DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md)
- **Netlify 文档**: [docs.netlify.com](https://docs.netlify.com)
- **Snipcart 文档**: [docs.snipcart.com](https://docs.snipcart.com)
- **Stripe 文档**: [stripe.com/docs](https://stripe.com/docs)

## 📄 许可证

本项目仅供学习和商业使用。

---

**祝生意兴隆！** 🎊

如有问题，请查看 `DEPLOYMENT_GUIDE.md` 获取详细部署指南。
