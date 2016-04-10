	<!-- +++++ Reading Section +++++ -->

	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-12">
		    <table id="pubTable" class="display"></table>
            <pre id="bibtex" style="display:none;"> 
               <?php
				// get contents of a file into a string
				$filename = "assets/files/switching.bib";
				$handle = fopen($filename, "r");
				$contents = fread($handle, filesize($filename));
				fclose($handle);
				echo $contents;
			   ?>
            </pre>
			</div>
		</div>