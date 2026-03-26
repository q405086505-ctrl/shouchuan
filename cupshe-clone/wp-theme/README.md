# Cupshe Clone WordPress Theme

A custom WooCommerce theme cloned from Cupshe website.

## Installation

### Requirements
- WordPress 6.0 or higher
- WooCommerce 7.0 or higher
- PHP 8.0 or higher

### Installation Steps

1. **Upload Theme**
   - Copy the `wp-theme` folder to your WordPress themes directory (`/wp-content/themes/`)
   - Rename the folder to `cupshe-clone`
   - Or zip the `wp-theme` folder and upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

2. **Activate Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Cupshe Clone" and click "Activate"

3. **Install WooCommerce**
   - If not already installed, install and activate WooCommerce plugin
   - Follow WooCommerce setup wizard

4. **Configure Menus**
   - Go to Appearance → Menus
   - Create a menu named "Primary Menu" and assign to "Primary Menu" location
   - Add your product categories and pages

5. **Customize Theme**
   - Go to Appearance → Customize
   - Configure:
     - Top Bar text
     - Video Banner (URL and poster image)
     - App Download section (phone image and QR code)

## Theme Features

- Fully responsive design
- WooCommerce integration
- Custom homepage with:
  - Video banner
  - Policy banner
  - Category grid
  - Activity banners
  - Hot products section
  - Brand promotion
  - Instagram feed
  - App download section
- Customizer options
- SEO optimized
- Fast loading

## File Structure

```
cupshe-clone/
├── assets/
│   ├── css/
│   │   ├── header.css
│   │   ├── footer.css
│   │   └── woocommerce.css
│   └── js/
│       └── main.js
├── inc/
│   └── woocommerce.php
├── woocommerce/
│   └── content-product.php
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── single.php
└── screenshot.png
```

## Customization

### Adding Products
1. Go to Products → Add New
2. Add product title, description, and images
3. Set product categories (bikinis, one-pieces, cover-ups, etc.)
4. Set price and variations if needed

### Changing Images
All images are loaded from Cupshe CDN. To use your own images:
1. Replace image URLs in `front-page.php`
2. Or use WordPress Customizer for configurable sections

### Modifying Styles
- Main styles: `style.css`
- Header styles: `assets/css/header.css`
- Footer styles: `assets/css/footer.css`
- WooCommerce styles: `assets/css/woocommerce.css`

## Credits

- Design inspired by [Cupshe](https://www.cupshe.com/)
- Icons: Custom SVG
- Fonts: Poppins, KMRMelangeGrotesk

## License

GPL v2 or later
