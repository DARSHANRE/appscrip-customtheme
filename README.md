# appscrip-customtheme
## Setup Steps

1. Download the theme folder.
2. Move the folder to:
   wp-content/themes/
3. Login to WordPress admin.
4. Go to Appearance → Themes.
5. Activate the "appscrip-theme".
6. Go to Settings → Reading and set a static homepage.

## Key Decisions

 I created a custom theme without using any page builders.
 Followed the proper WordPress theme structure (header.php, footer.php, front-page.php, etc.).
 Registered the navigation menu using register_nav_menus.
 Used WordPress enqueue functions to load CSS and JavaScript.

## Performance Considerations

 Did not use any heavy libraries.
 Only required CSS and JS files are loaded.
 JavaScript is loaded in the footer for better performance.
 Kept the code clean and simple.
