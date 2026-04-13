# Royal Desi Crew WordPress Deployment Guide

## Quick Summary
- **WordPress Theme**: `royal-desi-crew-theme`
- **Domain**: royaldesicrew.com
- **Hosting**: MilesWeb
- **Status**: Ready to Deploy

---

## Prerequisites
You'll need:
1. cPanel access or FTP credentials for your MilesWeb hosting
2. WordPress already installed on royaldesicrew.com
3. Admin access to WordPress dashboard (wp-admin)

---

## Step-by-Step Deployment

### Step 1: Access Your Hosting

**Option A: Via cPanel (Recommended)**
1. Go to your cPanel URL (usually https://royaldesicrew.com:2083 or from your hosting email)
2. Login with:
   - Username: `admin`
   - Password: `Royaldesicrew@2017`

**Option B: Via FTP**
1. Use FileZilla or WinSCP
2. Connect with FTP credentials sent by MilesWeb
3. Navigate to `/public_html/` folder

---

### Step 2: Upload Theme Files

**Via cPanel File Manager:**
1. In cPanel, go to **File Manager**
2. Navigate to: `public_html → wp-content → themes`
3. Upload the entire `royal-desi-crew-theme` folder here

**Via FTP:**
1. Navigate to: `/public_html/wp-content/themes/`
2. Upload the entire `royal-desi-crew-theme` folder

**File Structure to Upload:**
```
royal-desi-crew-theme/
├── assets/
│   ├── css/
│   │   ├── main.css (your styles.css)
│   │   └── gallery.css
│   ├── js/
│   │   ├── main.js (your script.js)
│   │   ├── gallery.js
│   │   ├── photos-loader.js
│   │   └── photos.json
│   └── images/ (all your Images folder content)
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
└── front-page.php
```

---

### Step 3: Activate Theme in WordPress

1. Go to your WordPress Dashboard: **https://royaldesicrew.com/wp-admin**
2. Login with:
   - Username: `admin`
   - Password: `Royaldesicrew@2017`

3. Navigate to: **Appearance → Themes**
4. Find `Royal Desi Crew` theme
5. Click **Activate**

---

### Step 4: Set Home Page

1. In WordPress Dashboard: **Settings → Reading**
2. Select: **Static page**
3. Set:
   - **Homepage**: Create a page called "Home" or leave blank (front-page.php will be used)
   - **Posts page**: Leave as default

4. Click **Save Changes**

---

### Step 5: Set URLs and Permalinks

1. Go to: **Settings → General**
2. Verify:
   - **WordPress Address**: https://royaldesicrew.com
   - **Site Address**: https://royaldesicrew.com

3. Go to: **Settings → Permalinks**
4. Select: **Post name** (or keep as is)
5. Click **Save Changes**

---

### Step 6: Test Your Website

1. Visit: https://royaldesicrew.com
2. Verify all sections load:
   - ✓ Header with logo
   - ✓ Hero section with carousel
   - ✓ Services section
   - ✓ Packages section
   - ✓ Gallery section
   - ✓ About section
   - ✓ Contact section
   - ✓ Footer
   - ✓ WhatsApp button

3. Test functionality:
   - ✓ Click "Book Now" button
   - ✓ Test modals open/close
   - ✓ Test gallery images
   - ✓ Test contact form
   - ✓ Test WhatsApp link

---

## Important Configuration

### Email Setup (EmailJS)
The theme uses EmailJS for sending emails. Your current EmailJS configuration is:
- **Service ID**: service_b8hukgl
- **Public Key**: ZbITBo3U3lGnGZVXi
- **Booking Template**: template_c5e065c
- **Consultation Template**: template_hx4pwb6

*Note: These keys are already in the JavaScript files. No additional setup needed.*

### WhatsApp Integration
WhatsApp number: **+91 9614028424**
*This is already configured in the theme.*

---

## Troubleshooting

### Issue: Theme not showing up
**Solution**: 
- Clear WordPress cache: Go to **Plugins** (if you have caching plugin, disable temporarily)
- Hard refresh browser: Ctrl+Shift+R (Windows) or Cmd+Shift+R (Mac)

### Issue: Images not loading
**Solution**:
- Check image paths in CSS and HTML
- Ensure all images are in `/wp-content/themes/royal-desi-crew-theme/assets/images/`
- Verify file names match exactly (case-sensitive)

### Issue: JavaScript not working (modals, gallery, etc.)
**Solution**:
- Go to **Settings → Permalinks**, click **Save Changes** (refreshes rewrite rules)
- Check browser console for errors (F12)
- Ensure `assets/js/` files are in correct location

### Issue: Contact form not sending emails
**Solution**:
- Go to: https://emailjs.com/
- Verify your EmailJS account is active
- Check your email inbox (including spam folder)
- Test with different browser

---

## Future Updates (Using GitHub)

When you make changes in VS Code:

1. **Commit changes**:
   ```
   git add .
   git commit -m "Update: describe your changes"
   git push origin main
   ```

2. **Download updates from GitHub**:
   - Via cPanel: Use "Git Version Control" feature
   - Via FTP: Download files manually and upload

---

## Support Contact

**For technical support:**
- Email: support@royaldesicrew.com
- Phone: +91 96140 28424
- WhatsApp: +91 96140 28424

---

## Checklist

Before going fully live:

- [ ] Theme activated in WordPress
- [ ] Homepage is set correctly
- [ ] All images displaying properly
- [ ] Contact forms working
- [ ] Gallery modal opening/closing
- [ ] Navigation links working
- [ ] Mobile responsive (test on phone)
- [ ] Email confirmations being sent
- [ ] WhatsApp button working
- [ ] SSL certificate working (https://)

---

## That's It! 🎉

Your Royal Desi Crew WordPress site is now live!

Your admin can now manage everything from the WordPress Dashboard:
- Add/edit pages
- Upload gallery photos
- Modify packages
- Manage testimonials
- View form submissions
- And more!

Enjoy your new WordPress website! 🚀
