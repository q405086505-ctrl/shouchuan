# 语言切换功能使用说明
# Language Switcher Documentation

## 📋 概述 / Overview

本网站现已支持**中英文双语切换**功能，用户可以在中文和英文之间自由切换，提升国际化用户体验。

The website now supports **Chinese-English bilingual switching**, allowing users to freely switch between Chinese and English for an improved international user experience.

---

## ✨ 功能特性 / Features

### 1. **实时翻译 / Real-time Translation**
- ✅ 点击语言切换按钮即可立即切换语言
- ✅ 无需刷新页面
- ✅ 所有主要内容区域都会自动翻译

### 2. **持久化存储 / Persistent Storage**
- ✅ 用户的语言偏好会自动保存到 localStorage
- ✅ 下次访问时自动使用上次选择的语言

### 3. **SEO 优化 / SEO Optimized**
- ✅ 自动更新页面 title、meta description
- ✅ 自动更新 Open Graph 标签
- ✅ 搜索引擎友好的实现方式

### 4. **响应式设计 / Responsive Design**
- ✅ 支持桌面端和移动端
- ✅ 优雅的下拉菜单动画
- ✅ 触摸友好的交互设计

---

## 🎯 使用方法 / Usage

### 切换语言步骤：

1. **找到语言切换器**
   - 位置：页面顶部导航栏右侧，购物车图标旁边
   - 显示当前语言（中文 或 EN）

2. **点击语言切换按钮**
   - 会弹出语言选择下拉菜单
   - 显示两种语言选项：中文 / English

3. **选择目标语言**
   - 点击 "中文" 或 "English"
   - 页面会立即切换到所选语言
   - 显示切换成功提示

4. **语言保持**
   - 选择的语言会自动保存
   - 刷新页面或下次访问时会记住您的选择

---

## 🔧 技术实现 / Technical Implementation

### 文件结构：

```
cupshe-clone/
├── css/
│   └── language-switcher.css    # 语言切换器样式
├── js/
│   ├── language-switcher.js     # 语言翻译核心逻辑
│   └── add-i18n-attributes.js   # i18n 属性添加工具（可选）
└── index.html                    # 主页面（已集成语言切换器）
```

### 核心组件：

#### 1. **language-switcher.js**
- 包含完整的中英文翻译字典
- 提供语言切换、翻译应用等功能
- 自动更新 SEO 标签

#### 2. **language-switcher.css**
- 响应式样式设计
- 支持深色模式
- 优雅的动画效果

#### 3. **HTML 集成**
```html
<div class="language-switcher" id="header-language-switcher">
  <div class="lang-switch-btn">
    <span class="lang-display">中文</span>
    <div class="lang-dropdown">
      <div class="lang-option" data-lang="zh">中文</div>
      <div class="lang-option" data-lang="en">English</div>
    </div>
  </div>
</div>
```

---

## 📝 翻译覆盖范围 / Translation Coverage

### 已翻译的区域：

| 区域 | 项目数 | 状态 |
|------|--------|------|
| 顶部导航栏 | 8 项 | ✅ 完成 |
| 主导航菜单 | 8 项 | ✅ 完成 |
| 用户菜单 | 8 项 | ✅ 完成 |
| 政策横幅 | 6 项 | ✅ 完成 |
| 分类区域 | 8 项 | ✅ 完成 |
| 横幅广告 | 6 项 | ✅ 完成 |
| 热门产品 | 8 项 | ✅ 完成 |
| 品牌故事 | 8 项 | ✅ 完成 |
| Instagram 区域 | 2 项 | ✅ 完成 |
| APP 下载 | 8 项 | ✅ 完成 |
| 页脚链接 | 20+ 项 | ✅ 完成 |
| **总计** | **90+ 项** | **✅ 完成** |

---

## 🌐 翻译字典示例 / Translation Dictionary Example

```javascript
const translations = {
  zh: {
    'topbar_promo': '新用户专享 9 折优惠 — 首次订阅即享！',
    'nav_new_trending': '新品热卖',
    'nav_crystal_bracelets': '水晶手串',
    'hot_products_title': '当季热卖推荐',
    'brand_title': '手串之道',
    // ... 更多翻译
  },
  en: {
    'topbar_promo': 'New User Exclusive 10% Off — Subscribe Now!',
    'nav_new_trending': 'New & Trending',
    'nav_crystal_bracelets': 'Crystal Bracelets',
    'hot_products_title': 'WHAT\'S HOT RIGHT NOW',
    'brand_title': 'THE WAY OF BRACELETS',
    // ... more translations
  }
};
```

---

## 🎨 自定义翻译 / Customizing Translations

### 添加新的翻译：

1. **打开翻译文件**
   ```javascript
   // js/language-switcher.js
   const translations = {
     zh: {
       // 添加新的中文翻译
       'your_new_key': '您的中文翻译',
     },
     en: {
       // 添加新的英文翻译
       'your_new_key': 'Your English Translation',
     }
   };
   ```

2. **在 HTML 中使用**
   ```html
   <span data-i18n="your_new_key">默认显示内容</span>
   ```

3. **测试翻译**
   - 切换语言查看新翻译是否正确显示

---

## 🔍 API 参考 / API Reference

### 全局对象：`window.LanguageSwitcher`

#### 方法：

1. **init()** - 初始化语言系统
   ```javascript
   LanguageSwitcher.init();
   ```

2. **switch(lang)** - 切换语言
   ```javascript
   LanguageSwitcher.switch('en');  // 切换到英文
   LanguageSwitcher.switch('zh');  // 切换到中文
   ```

3. **getCurrent()** - 获取当前语言
   ```javascript
   const currentLang = LanguageSwitcher.getCurrent();
   console.log(currentLang);  // 'zh' 或 'en'
   ```

4. **translate(key, lang)** - 翻译文本
   ```javascript
   const text = LanguageSwitcher.translate('nav_new_trending', 'en');
   console.log(text);  // 'New & Trending'
   ```

---

## 🐛 故障排除 / Troubleshooting

### 问题 1：切换语言后部分内容未翻译

**原因：** 该内容没有添加 `data-i18n` 属性

**解决方案：**
```html
<!-- 错误 -->
<span>未翻译的内容</span>

<!-- 正确 -->
<span data-i18n="translation_key">未翻译的内容</span>
```

### 问题 2：语言切换器不显示

**原因：** CSS 文件未正确加载

**解决方案：**
```html
<!-- 确保在 <head> 中包含 -->
<link rel="stylesheet" href="css/language-switcher.css">
```

### 问题 3：切换后页面闪烁

**原因：** JavaScript 文件加载顺序问题

**解决方案：**
```html
<!-- 确保在 </body> 之前最后加载 -->
<script src="js/language-switcher.js"></script>
```

---

## 📊 性能优化建议 / Performance Tips

1. **懒加载翻译**
   - 对于大型网站，可以按需加载翻译
   - 减少初始加载时间

2. **缓存优化**
   - 翻译字典已缓存在内存中
   - 无需重复加载

3. **CDN 加速**
   - 考虑将翻译文件托管到 CDN
   - 提升全球访问速度

---

## 🚀 未来扩展 / Future Enhancements

### 计划支持的语言：
- [ ] 日语 / Japanese
- [ ] 韩语 / Korean
- [ ] 法语 / French
- [ ] 德语 / German
- [ ] 西班牙语 / Spanish

### 计划功能：
- [ ] 自动语言检测（基于浏览器设置）
- [ ] URL 参数支持（?lang=en）
- [ ] 翻译管理系统集成
- [ ] A/B 测试不同翻译版本

---

## 📞 技术支持 / Support

如有任何问题或建议，请联系开发团队。

**文档版本 / Doc Version:** 1.0  
**更新日期 / Last Update:** 2026 年 3 月 26 日  
**维护状态 / Maintenance Status:** ✅ 活跃维护中

---

## 📄 许可证 / License

本翻译系统采用 MIT 许可证。
