# Here rests the code for a WordPress plugin which adds privacy-first social sharing buttons to blog posts. 
The plugin allows users to customize the appearance and placement of the buttons. 
The code is divided into two parts: the main plugin file and the CSS file for styling.

- Drop the `privacy_first_social_sharing` folder into your WordPress plugins folder.
- Customize the appearance and placement of the buttons by modifying the `styles.css` file.
- Activate the plugin in your WordPress admin panel.
- Now, the privacy-first social sharing buttons will be added to your blog posts.

# Ok, but what makes this "privacy first"?
This code is "privacy-first" because it avoids loading external scripts and trackers that are typically associated with social sharing buttons.

In many social sharing plugins, the buttons are rendered using external JavaScript libraries, and these libraries often collect user data for tracking purposes. By implementing the sharing buttons with simple hyperlinks and direct URLs to share the content on each platform, this plugin avoids including any third-party scripts or libraries that could compromise user privacy and data collection.

In summary, the "privacy-first" aspect is achieved through:

- Using simple hyperlinks instead of importing external scripts.
- Not using any unnecessary cookies, user tracking, or analytics code.
- Not loading any third-party assets that could collect user data.
- Connections to social media platforms are only made when the user clicks the sharing button and not by just embedding the buttons.

These measures help ensure better compliance with privacy laws and regulations by reducing or eliminating data collection without user consent.
