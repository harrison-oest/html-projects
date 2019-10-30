<?php date_default_timezone_set("America/Denver"); ?>
<?php if (isset($currentPath)) { ?>
<footer>
	<div class="validationBadges">
        <?php if ($currentPath == "") { ?>
            <a href="https://validator.w3.org/#validate_by_uri+with_options?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate HTML"><img src="images/html5.png" alt="html5 validation badge" style="width:50px;height:100%"></a>
            <a href="https://achecker.ca/checker/index.php?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3"><img src="images/wcag2A.png" alt="wcag2A validation badge" style="width:50px;height:100%"></a>
            <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Web Accessibility Checker"> <img src="images/css.png" alt="css validation badge" style="width:50px;height:100%"></a>            
        <?php } else { ?>
        	<img src="../images/html5.png" alt="html5 validation badge" style="width:50px;height:100%">
            <img src="../images/css.png" alt="css validation badge" style="width:50px;height:100%">
            <img src="../images/wcag2A.png" alt="wcag2A validation badge" style="width:50px;height:100%">
        <?php }} ?>
    </div>
    <p><?php echo "This page was last updated on ".date("F d Y H:i", filemtime($pageName.".php")) ?></p>
	<p>&#169; Copyright 2019 Harrison Oest</p>
</footer>