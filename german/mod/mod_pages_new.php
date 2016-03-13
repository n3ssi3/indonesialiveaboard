<?php	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// how many pages we have when using paging?
$result  = mysql_query($query) or die('Error, query failed');
$numrows    = mysql_num_rows($result);

$maxPage = ceil($numrows/$rowsPerPage);

$self = $_SERVER['PHP_SELF'];

// creating 'previous' and 'next' link
// plus 'first page' and 'last page' link

// print 'previous' link only if we're not
// on page one
if ($pageNum > 1)
{
	$page = $pageNum - 1;
	//$page = $_GET['page'];
	$prev = " <a href=\"$self?page=$page&s=$schedule&d=$destination&b=$boats\">[Prev]</a> ";
	
	$first = " <a href=\"$self?page=1&s=$schedule&d=$destination&b=$boats\">[First Page]</a> ";
} 
else
{
	$prev  = ' Prev ';       // we're on page one, don't enable 'previous' link
	$first = ' First Page '; // nor 'first page' link
}

// print 'next' link only if we're not
// on the last page
//nampilin nomor
for ($counter = 1; $counter <= $maxPage; $counter++)
			{
				if ($counter == $pageNum)
					$pagination.= " <b>$counter</b> ";
				else
					$pagination.= " <a href=\"$targetpage?page=$counter&s=$schedule&d=$destination&b=$boats\">$counter</a> ";					
				if ($counter % 10 == 0)
					{$pagination.="<br>";}
			}

if ($pageNum < $maxPage)
{
	$page = $pageNum + 1;
	#$next = " <a href=\"$self?page=$page&mn=$mn&sub=1\">[Next]</a> ";
	$next = " <a href=\"$self?page=$page&s=$schedule&d=$destination&b=$boats\">[Next]</a> ";
	#$last = " <a href=\"$self?page=$maxPage&mn=$mn&sub=1\">[Last Page]</a> ";
	$last = " <a href=\"$self?page=$maxPage&s=$schedule&d=$destination&b=$boats\">[Last Page]</a> ";
} 
else
{
	$next = ' Next ';      // we're on the last page, don't enable 'next' link
	$last = ' Last Page '; // nor 'last page' link
}

// print the page navigation link
#echo "Page $pageNum of  $maxPage : ". "$first  |" . "$prev  | " . " $pagination " . "$next | ". $last;
echo "<table><tr><td>". "$first  |" . "$prev  | " . "</td><td align='center'>" . " $pagination " . "</td><td>" . "$next | ". "$last"."</td></tr></table>";
?>