<?php
/*$content = file_get_contents('https://chattraffic.com/users/signup/new');
//$content = str_replace('</head>','<style>#header{display: none;}</style></head>', $content);
echo $content;*/
?>
<script src="js/jquery-3.5.1.min.js"></script>
<iframe id='myiFrame' src="https://chattraffic.com/users/signup/new" height="500" width="600" title="Iframe Example"></iframe>

<script>
$("#myiFrame").on("load", function() {
  let head = $("#myiFrame").contents().find("head");
  alert(head);
  let css = '<style>#header{display: none;}</style></head>';
  $(head).append(css);
});
</script>