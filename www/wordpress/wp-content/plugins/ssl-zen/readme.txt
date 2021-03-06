=== SSL Zen - Free SSL Certificate & HTTPS Redirect for WordPress ===
Contributors: sslzen
Donate link: https://paypal.me/sagarspatil
Tags: https,ssl,free ssl,ssl certificate,mixed content,insecure content,force ssl
Requires at least: 4.2
License: GPL3
Tested up to: 5.5
Requires PHP: 5.4
Stable tag: 2.2.1

Helps install a free SSL certificate from Let's Encrypt, fixes mixed content, insecure content by redirecting to https, and forces SSL on all pages.

== Description ==

### Secure your website with a Free SSL certificate. Trusted by 26,000+ websites globally! ###

https://www.youtube.com/watch?v=Jk86wUqoOco

For more information about our plugin, please visit [sslzen.com](https://sslzen.com)

In three easy steps, we help you secure your WordPress website. First, we provide you with a free SSL certificate from [Let's Encrypt®](https://letsencrypt.org). Our WordPress plugin then helps you install it. Finally, with a single click, you can redirect web-traffic to HTTPS and get a shiny padlock on your website.

### Go from HTTP to HTTPS in minutes ###

**Free SSL certificate**
Are you all thumbs when it comes to technology? Fret not! We help you generate and install a free SSL certificate all by yourself (The certificates are provided by Let’s Encrypt®, a non-profit Global Certificate Authority). And if you’re stuck, we offer top-notch support to get you back on track!

**Plugin-based certificate installation**
Manually installing an SSL certificate is not as easy as it sounds. It involves editing certain files in your WordPress directory and troubleshooting issues, which, believe you us, will crop up! Instead, with our plugin, all you need to do is follow a few easy steps. We also provide SSL certificate renewal, which means that you do not have to pay big bucks to keep your site secure year after year.

**One-click conversion to HTTPS**
No coding, no hassle, no more mixed content, or insecure content warnings. In other words, you require no special developer experience to move your HTTP web-pages to HTTPS or to force SSL on your website. Our plugin does it for you, and lets you bypass the dreaded 404-page error!

= Free Version: Features =
* Generate a Free SSL certificate by verifying your domain ownership.
* Supports Wildcard SSL certificates that will cover all your sub-domains.
* Install the SSL certificate using our simple video tutorials.
* Redirect HTTP to HTTPS with a single click.

Want the plugin to automatically install and renew your SSL certificate? Upgrade to our Pro plan and never pay for a SSL certificate again.

= Pro Version: Features =
* Automatically proves domain ownership.
* Automatically generates a free SSL certificate.
* Automatically uploads and configures the free SSL certificate.
* Automatically renews the free SSL certificate.
* Get a shiny pad lock on your website under 60 seconds.
* Premium one-on-one unlimited support.

Note: The pro version of the plugin only works on cPanel based website. To find out if your website uses cPanel, please verify by visiting yourdomainname.com/cpanel or yourdomainname.com:2083, example: sslzen.com/cpanel or sslzen.com:2083

= Why get a SSL padlock? =
* Trust - Starting from July 2018, Google Chrome has begun to mark all non SSL-websites as ‘Not Secure’. When your users see the broken padlock, their trust wavers!
* Security - SSL provides authentication, trust and compliance. If your customer is filling out forms, or making payments on your website, you need SSL to protect sensitive data from eavesdroppers.
* SEO - Google ranks SSL-enabled websites higher than unsecured websites. Hence, securing your website also helps get you on top of Google’s search results.

= Please leave a review =
If our plugin helped you secure your website, please leave a [review here](https://wordpress.org/support/plugin/ssl-zen/reviews/#new-post)

= Prerequisites =
Linux Hosting, PHP 5.4 and above, OpenSSL, cURL, PHP directive allow_url_fopen should be on.

For more information about our plugin, please visit [sslzen.com](https://sslzen.com)

Internet Security Research Group™, Let’s Encrypt®, ISRG™ are trademarks of the Internet Security Research Group. All rights reserved.

== Installation ==
To install this plugin:

1. Make a backup of your website and database
2. Download the plugin
4. Upload the plugin to the wp-content/plugins directory,
5. Go to “plugins” in your WordPress admin, then click activate.
6. You will now see a SSL Zen icon on your left navigation bar. Click on it and follow the step by step guide.

== Frequently Asked Questions ==

= What is a SSL Certificate? =
An SSL (Secure Sockets Layer) certificate is a digital certificate that authenticates the identity of a website and encrypts information sent to the server using SSL technology. 

= Are your SSL certificates really free? =
Yes. All SSL certificates are generated by Let’s Encrypt® (nonprofit) with a mission to create a more secure and privacy-respecting Web by promoting the widespread adoption of HTTPS.

= What benefits does SSL provide? =
An SSL Cert protects your customers’ sensitive information such as their name, address, password, or credit card number by encrypting the data during transmission from their computer to your web server.

= How do I install my SSL certificate? =
You will be emailed a certificate and a private key. Simply go to your cPanel dashboard, click on SSL/TLS and follow the process to install SSL certificate.

= How long are the certificates valid? =
Let's Encrypt® certificates are valid for 90 days and can be renewed with no additional cost. You can easily renew them through our plugin.

= How do I renew an SSL certificate? =
Simply follow the same process you used to generate and install SSL certificate the first time and your certificates will be renewed.

= Do I need technical knowledge to set up an SSL? =
Our free version of the plugin does require you to upload files on your website to verify domain ownership.

= Is your plugin safe to install on my website? =
Our plugin is open-source and anyone can download and inspect it before installing on their website.

= Do you support Wildcard SSL? =
We currently do not support wildcard SSL. Our plugin is only built to generate SSL certificate for your WordPress website/blog.

= Which browsers will trust my certificate? =
All major browsers are supported.

= What is the verification process? =
The verification is a simple process to prove that you own the domain for which you are requesting the certificate.

= Do I need to do the verification again when I renew? =
The verification results are valid, at the time of writing, for 30 days. If you renew within that period, you should not need to re-verify. Outside of that period you will need to do the verification again. However, it is a very simple process that requires almost no time.

= I have installed the certificate correctly, but my site is not shown as "Secure" =
The most likely reason for this is that you are still loading some resources, such as images for example, via HTTP. Browsers in this case will show "Mixed content" errors in the developers console. If you do not want to use developer tools, you can easily check which resources those might be by using ["Why No Padlock?"](https://whynopadlock.com) service. You can read more about "Mixed Content" and how to prevent it [here](https://developers.google.com/web/fundamentals/security/prevent-mixed-content/fixing-mixed-content).

= Can I see the name of my company on the certificate? =
Free certificates are of Domain Validation type (DV) and do not hold that information. To have the information about your company, the certificate would need to pass Organization Validation (OV) or Extended Validation (EV). Both require paperwork (such as actual company checks) and cannot be offered for free as a result.

== Screenshots ==
1. How it works
2. Agree to Let's Encrypt ® TOS
3. Verify domain ownership by uploading files on your server
4. Install SSL certificate on your web server
5. Redirect http to https
6. Renew SSL certificate
7. Settings to enable 301 redirection the settings page.

== Changelog ==

= 2.2.1 =
* Added hyperlink for certificate name on Step 3. Added tooltip for copy and download button.
* Increased delay for Let's Debug calls as the previous delay was still not sufficient for few websites.

= 2.2 =
* Added a delay for Let's Debug calls
* Moved Enable Debugging from Advanced > Debug tab
* Added instructions for non cPanel SSL installation
* Removed fopen as a requirement in System Requirements Check
* Fixed a bug that wasn't renewing SSL certs for Pro customers

= 2.1.2 =
* Bug fix for DNS verification
* We now show settings page from Step 1
* Live Chat Widget for Premium users

= 2.1.1 =
Bug fix for 'include www' checkbox which was checking for A record only, replaced it with A or CNAME record.

= 2.1 =
* Changed pricing to per year from lifetime on pricing page
* Disabled upgrade to Pro in non-cPanel version
* Creates SSL cert for only domain.tld or www.domain.tld based on website url
* Added functionality so that the pro version of the plugin works even if the website is hosted in a sub-directory
* Added debug messages for identifying issues with Let's Encrypt

= 2.0.3 =
Bug fix for cPanel credential verification.

= 2.0.2 =
Updated Let's Encrypt PHP library LE Client to 1.2.2. Please update immediately.

= 2.0.1 =
Bug fixes.

= 2.0 =
* Major Plugin Redesign
* Added DNS verification which now supports wildcard SSL certificate
* Added System Requirements Compatibility Test
* Added option to send debug information for easier troubleshooting
* Removes HTML verification files after LE verification is complete
* Optimized HTTP and DNS verification process
* Updated LEClient to 1.2.1
* Added a pricing page which lets users upgrade to pro version
* Removed Review Plugin notice and donation requests from Admin Dashboard
* Added warning if plugin is installed on a localhost or IP address
* If 'include www' is checked, we now verify that a 'A' record for it exists
* Improved pro license validation
* Improved SSL installation process
* Optimized source code

= 1.13 =
* Replaced support email with plugin contact page
* Add a Setup menu item in plugin navigation
* Replaced the error message in Step 4
* Updated LE Client to the latest version

= 1.12 =
* Optimized codebase
* Bug Fix - Freemius auto-update process

= 1.11.2 =

* Bug fix

= 1.11.1 =

* Bug fix

= 1.11 =

* Added support to add SSL certificate for non-cPanel websites
* Fixed a bug that was not renewing an SSL certificate if the current url was https by ignoring https redirection for .well-known folder
* Fixed 'Terms and Conditions' link which was not working as expected
* If someone closes the review notice, we do not show it again for 24 hours
* Customized Freemius welcome message
* Updated Freemius SDK to 3.3.2
* If a user's SSL certificate has expired and he clicks on Renew in the Settings tab, we now take him to Step 1 to re-create his authorization
* Users can now download the SSL certificate on Step 3
* Fix a bug that was not detecting cPanel compatibility because sslverify was true
* Added new videos for cPanel and Apache SSL installation instructions with voice-over

= 1.10 =

* Like the plugin? Become our ambassador and earn cash
* Refer new customers to our plugin and earn 20% commission on each successful sale you refer!
* To become an affiliate, go to SSL Zen plugin and click on affiliation in the left menu.
* Added new tags ssl,ssl certificate,openssl,letsencrypt,free ssl,free ssl certificate,ssl tls,secure socket layer,ssl encryption,wildcard ssl certificate,letsencrypt wildcard,ssl https,tls,wordpress ssl

= 1.9.6 =

* Security Patch for 1.9.5
* Changed tags to https, ssl, free ssl, ssl certificate, mixed content,insecure content,force ssl

= 1.9.5 =

* Fixed security issue
