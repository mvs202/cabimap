# cabimap

Show map of Capital Bikeshare stations, coloring each jurisdiction differently.
Goal is to visually display result of formula converting station IDs to jurisdictions.

Because https://feeds.capitalbikeshare.com/stations/stations.xml doesn't have Access-Control-Allow-Origin, I had to use a proxy script (http://mvjantzen.com/cabi/stations.php). But because I can't use an SSL Certificate on my hosted service (Bluehost) without paying extra, https://mvs202.github.io/cabimap/ won't work, because GitHub Pages always use HTTPS.

Until the Access-Control-Allow-Origin or SSL problem is fixed, the project is hosted at http://mvjantzen.com/cabi/map.html
