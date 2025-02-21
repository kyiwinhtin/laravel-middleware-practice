## About Middleware

Guards: We used a separate admin guard to differentiate between regular users and admins.


Middleware: The AdminAuth middleware ensures only authenticated admins can access the dashboard.


Routes: Admin routes are prefixed with /admin and protected appropriately.


Views: Separate views keep the admin interface distinct from the user interface
