            
<body>

Merek Mobil :

    <form method="get">
        
        <select id="cd" name="cd">

        <?php
            
            $mysqlserver="localhost";
            $mysqlusername="rzrizaldy";
            $mysqlpassword="12345678";
            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'oncost';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT DISTINCT merekmobil FROM mobil";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $cdTitle=$cdrow["merekmobil"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }
                
            ?>
		</select>
        
    </form>

Merek Mobil :

    <form method="get">
        
        <select id="cd" name="cd">

        <?php
            
            $mysqlserver="localhost";
            $mysqlusername="rzrizaldy";
            $mysqlpassword="12345678";
            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'oncost';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT DISTINCT merekmobil FROM mobil";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $cdTitle=$cdrow["merekmobil"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }
                
            ?>
		</select>
        
    </form>
</body>      