<h1>Portfolio, desu</h1>
<p>
    <head>
        <img src="/images/portfolio.png"><br>
    </head>
    <table> some table, desu.
        <tr><td>Year, desu</td><td>Project, desu</td><td>Description, desu</td></tr>
        <?php
            foreach($data as $row)
            {
                echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
            }
        ?>
    </table>
</p>