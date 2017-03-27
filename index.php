<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>CMS Fundamentals</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100, 400" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">

      <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">

        <div class="col-xs-2">
          <aside class="sidebar">
            <ul>
              <?php for ($i=0; $i < 9; $i++): ?>
                <li><a href="#<?php echo $i ?>"><?php echo $i ?></a></li>
              <?php endfor ?>
            </ul>           
          </aside>
        </div>

        <div class="col-xs-10">

          <section id="0">

            <h1>CMS Fundamentals</h1>

          </section>

          <section id="1">

            <h2>#1 - What is a CMS</h2>
            <p>Server-side sofware that is designed to simplify the creation and maintenance of sites. These systems manage online content, generate web pages, and allow users to upload and change content without requiring technical expertise.</p>

          </section>

          <section id="2">

            <h2>#2 - The evolution of CMS</h2>

            <ul>
              <li>- Web-based CMS can trace its origins to print-based Document Assembly Content System</li>
              <li>- As web publising increased, the need for content management grew.</li>
              <li>- Few tools existed in the mid 90's to manage online content.</li>
              <li>- At the end of the 90's there was an explosion of proprietary CMS.</li>
              <li>- System tended to be expensive.</li>
              <li>- Many proprietary CMS were customized based on client's requirements.</li>
              <li>- For the most part CMS sites were limited to the larger, enterprise-level clients that could afford such services.</li>
            </ul>
            <p class="text-center"><img src="/images/history.jpg" class="img-fluid"></p>
            

          </section>

          <section id="3">

            <h2>#3 - The evolution of CMS - 2</h2>
            <ul>
              <li>- Around 2000 the growing popularity of the LAMP Stack offered an opportunity to change all of that.</li>
              <li>- LAMP is an acronym that stands for Linux, Apache, MySQL, and PHP, products that when combined allowed individuals to create powerful general purpose web servers.</li>
              <li>- These free open-source programs revolutionized many industries and resulted in an explosion of hosting companies, open- source software, and do-it-yourself solutions.</li>
              <li>- The CMS marketplace was directly affected by this development with the release of products like Drupal in 2001 and Joomla! in 2005.</li>
              <li>- These free open-source CMSs offered an alternative to the growing commercial field and quickly developed a large support community that continues to improve and extend those platforms.</li>
              <li>- At the same time, other CMSs were revolving as well, usually as a result of maturing online markets, products like WordPress evolved out of the blogging community and have gone onto become powerful CMSs in their own right.</li>

            </ul>

          </section>

          <section id="4">

            <h2>#4 - CMS types</h2>

            <p>There are literally hundreds of CMSs on the market, and trying to pin them down within a single category set is difficult.</p>

            <p>This is a list of CMS by types that focus on either a specific industry or content type.</p>

            <h3>General Purpose</h3>
            <p>These systems have no specific focus but are designed to give you control over site architecture, content publishing, and site administration. Most of these systems are extendible, or have existing modules to add functionality</p>
            <p class="text-center"><img src="images/general.jpg">

            <h3>Blogs</h3>
            <p>Many blogging platforms have evolved to the level of very sophisticated Web Content Management Systems. Their focus is on the publishing and repurposing of content, primarily articles and text.</p>
            <p class="text-center"><img src="images/blogs.jpg"></p>

            <h3>E-learning</h3>
            <p>These systems focus specifically on the world of eLearning. Many have built-in functionality for creating curriculums, building quizzes, <a href="https://en.wikipedia.org/wiki/Sharable_Content_Object_Reference_Model" data-toggle="tooltip" data-placement="top" title="Sharable Content Object Reference Model">SCORM</a> compliancy, and support for multiple document types.</p>
            <p class="text-center"><img src="images/e-learning.jpg"></p>

            <h3>E-commerce</h3>
            <p>Solutions range from full-featured CMS to smaller, eCommerce focused applications. Features include shopping carts, product management, billing and security</p>
            <p class="text-center"><img src="images/e-commerce.jpg"></p>

            <h3>Wikis</h3>
            <p>These systems contain features that allow you to create and manage fully collaborative Wikis. Can be used alone, or in conjuntion with other site tools.</p>
            <p class="text-center"><img src="images/wiki.jpg"></p>

            <h3>Social Media</h3>
            <p>Social Media focused systems have the capability to build online communities, manage user profiles, tie into existing networks, and allow messaging and content uploading</p>
            <p class="text-center"><img src="images/social-media.jpg"></p>

          </section>

          <section id="5">

            <h2>#5 - Basic CMS capabilities</h2>

            <h3>Typical CMS Workflow</h3>

            <p>Content creators, editors, and publishers access the CMS through a client, which is usually browser based.</p>

            <p>Content is entered into the CMS, edited, approved, and published based on organizational workflow.</p>

            <p>The content is in store within a relational database, and categories and metadata are used to help the CMS understand the content's relevance.</p>

            <p>Once it's approved, the content is then added to the site based on its category or other taxonomy.</p>

            <p>To assemble pages, the CMS uses templates, published content, and any modules such as calendars, polls, and forms that have been associated with specific pages.</p>

            <p>Site navigation is typically built dynamically as pages are added based on content.</p>

            <!-- Talk about Wordpress example: post, pages, categories and tags -->

          </section>

          <section id="6">
            
          <h2>#6 - Open Source CMS</h2>

          <p>Open source software is software that is designed to encourage collaboration and community development. It is released with licenses that allow it to be distributed for free and without royalty fees.</p>

          <p>Open-source software really began to take hold of the web with the release of PHP in the mid-90s.</p>

          <p>We can say that PHP democratized the world of web-based content management and made it a lot easier for individuals and smaller organizations to bring content management to their sites.</p>

          </section>

          <section id="7">
            
            <h2>#7 - LAMP</h2>

            <p>LAMP is actually an acronym that represents a stack of open-source software that when used in conjunction with one another create application servers.</p>

            <p>LAMP stands for Linux, Apache, MySQL, and PHP, although the scripting languages Pearl and Python often replace PHP in a LAMP stack.</p>

            <h3>Linux</h3>

            <p>Linux is an open-source operating system that is commonly used to run servers. Due to the fact that it's free, open source, and really powerful, hosting companies frequently use it as their platform of choice</p>

            <h3>Apache</h3>

            <p>Apache HTTP server makes up the next part of the LAMP stack and is a free, open-source web server that has revolutionized the web since its release in 1995. It is by far the most popular web server in use today, and it's used to serve over 60 % of all web sites.</p>

            <h3>MySQL</h3>

            <p>The next part of the LAMP stack, is often referred to as a type of database. That's not technically correct as MySQL is actually a relational database management system, and as the name implies, helps to create and manage relational databases as part of the LAMP stack.</p>

            <p>Relational databases, store data in multiple tables that have the ability to relate to each other in some way, usually by sharing data keys or properties.</p>


            <h3>PHP, Pearl or Pyton</h3>

            <p>It represents a server-side scripting language that can be used to create web applications or dynamic web sites.</p>

            <p>Many open-source CMSs, including Drupal, Joomla! and WordPress, were built in PHP and are designed to work using the LAMP stack.</p>

          </section>

          <section id="8">
            <h2 class="end">END</h2>
          </section>

          <footer>
            <p>Carlos Ortiz 2017</p>
          </footer>   

        </div>
      </div>
    </div><!-- /container -->  



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    
    </script>
  </body>
</html>
