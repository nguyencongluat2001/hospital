<style>
    body {
  padding: 3rem;
  font-size: 16px;
}

textarea {
  width: 100%;
  min-height: 30rem;
  font-family: "Lucida Console", Monaco, monospace;
  font-size: 0.8rem;
  line-height: 1.2;
}
</style>
<div class="pmd-card pmd-z-depth ">
    <textarea name="" id="myTextarea" cols="30" rows="10"></textarea>
</div>
<script>
    var data = <?php echo json_encode($datas) ?>;
    var myData = data;

    var textedJson = JSON.stringify(myData, undefined, 4);
    $('#myTextarea').text(textedJson);
</script>