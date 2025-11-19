<?php
/**
 * PHP Redirection Script
 *
 * This script immediately sends a 302 (Found) HTTP status code and a
 * Location header, redirecting the user's browser to the target URL.
 *
 * Target URL: https://themes.ignitercms.com
 */

// Define the target URL for the redirection
$target_url = "https://themes.ignitercms.com";

// Set the HTTP response code to 302 (Found), which is standard for temporary redirects.
// NOTE: It is crucial to call header() before any output is sent to the browser.
header("Location: " . $target_url, true, 302);

// Optionally, include an exit() to ensure no other code or content is executed or sent.
exit();

// Fallback HTML/link in case the header redirect fails (e.g., if output buffering is off and content was already sent)
?>
<html>
<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="0; url=<?php echo $target_url; ?>">
    <script>
        // JavaScript fallback in case meta refresh is blocked or slow
        window.location.replace("<?php echo $target_url; ?>");
    </script>
</head>
<body>
    <p>If you are not redirected automatically, follow this <a href="<?php echo $target_url; ?>">link to themes.ignitercms.com</a>.</p>
</body>
</html>