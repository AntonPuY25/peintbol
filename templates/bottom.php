						</div>
						</div>
						</div>
					  <div class="col-md-2">
				     
					   <a href=""><img src="media/img/reklama2.jpg" class="reklama2">
					  </div>
						<br style="clear:both"/>
				<footer class="footer"
<?php
$query="SELECT * FROM maintexts WHERE showhide='show'";
$adr=mysqli_query($de_con, $query);
while($result=mysqli_fetch_array($adr)){
    echo "<a href='index.php?url=".$result['url']."'>";
    echo $result['name'];


        '<br/>';

}
?>			 Клещёнок Антон
				</footer>

				 
		</body>
</html>