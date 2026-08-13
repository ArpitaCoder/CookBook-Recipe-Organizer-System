<h1 align="center">CookBook - Recipe Organizer System</h1>

<p align="center">
  A web-based recipe organizer for browsing and exploring recipes based on different cuisines.
</p>

<hr>

<h2>About the Project</h2>

<p>
  CookBook is a simple recipe management website where recipes are organized according to different cuisines.
  Each recipe can contain details and images, making it easy to explore different dishes in one place.
</p>

<p>
  The project is developed using HTML, CSS, JavaScript, PHP, and MySQL.
  PHP is used for backend functionality, while MySQL is used to store recipe and menu data.
  The database is managed locally using phpMyAdmin.
</p>

<h3>Important Note</h3>

<p>
  This project is designed to run locally. Menu items and recipe data are stored in a local
  MySQL database and managed through phpMyAdmin. Therefore, some menu items and dynamic
  content may not be visible when viewing the project directly on GitHub.
</p>

<hr>

<h2>Features</h2>

<ul>
  <li>Browse recipes by cuisine</li>
  <li>Organize recipes into different categories</li>
  <li>Display recipe details and images</li>
  <li>Dynamic content using PHP and MySQL</li>
  <li>Simple and user-friendly interface</li>
  <li>Reusable website components</li>
</ul>

<hr>

<h2>Tech Stack</h2>

<table>
  <tr>
    <th>Technology</th>
    <th>Purpose</th>
  </tr>
  <tr>
    <td>HTML5</td>
    <td>Website structure</td>
  </tr>
  <tr>
    <td>CSS3</td>
    <td>Styling and layout</td>
  </tr>
  <tr>
    <td>JavaScript</td>
    <td>Client-side functionality and interactivity</td>
  </tr>
  <tr>
    <td>PHP</td>
    <td>Backend functionality</td>
  </tr>
  <tr>
    <td>MySQL</td>
    <td>Database for recipes and menu items</td>
  </tr>
  <tr>
    <td>phpMyAdmin</td>
    <td>Database management</td>
  </tr>
</table>

<hr>

<h2>Project Structure</h2>

<pre>
CookBook-Recipe-Organizer-System/
│
├── components/       Reusable website components
├── cuisines/         Cuisine-specific pages
├── uploads/          Recipe images
├── database.php      Database connection
├── index.php         Main entry point
└── README.md
</pre>

<hr>

<h2>Run the Project Locally</h2>

<h3>Prerequisites</h3>

<ul>
  <li>XAMPP, WAMP, or MAMP</li>
  <li>PHP</li>
  <li>MySQL</li>
  <li>phpMyAdmin</li>
</ul>

<h3>Installation</h3>

<ol>
  <li>
    Clone the repository:
    <pre>git clone https://github.com/ArpitaCoder/CookBook-Recipe-Organizer-System.git</pre>
  </li>

  <li>
    Move the project folder into the server's web directory,
    such as <code>htdocs</code> in XAMPP.
  </li>

  <li>
    Start Apache and MySQL from the XAMPP control panel.
  </li>

  <li>
    Open phpMyAdmin and create the required database.
  </li>

  <li>
    Create or import the required tables for recipes, cuisines, and menu items.
  </li>

  <li>
    Configure the database connection in <code>database.php</code>.
  </li>

  <li>
    Open the project in your browser:
    <pre>http://localhost/CookBook-Recipe-Organizer-System/</pre>
  </li>
</ol>

<hr>

<h2>Database</h2>

<p>
  The project uses MySQL as its database. Recipe information, cuisine categories,
  and menu items are stored locally and managed through phpMyAdmin.
</p>

<p>
  Since the database is not hosted online, dynamic database content will not be
  available when viewing the repository on GitHub.
</p>

<hr>

<h2>Author</h2>

<p>
  <strong>Arpita Sharma</strong><br>
  MCA Student | Full Stack Web Development Learner
</p>

<hr>

<p align="center">
  This project was created as part of my web development learning journey.
</p>
