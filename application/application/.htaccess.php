# If your default controller is something other than
# "welcome" you should probably change this
RewriteRule ^(welcome(/index)?|index(\.php)?)/?$ / [L,R=301]
RewriteRule ^(.*)/index/?$ $1 [L,R=301]
# Removes trailing slashes (prevents SEO duplicate content issues)
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)/$ $1 [L,R=301]