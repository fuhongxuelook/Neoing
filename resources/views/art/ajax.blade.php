<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/twitter-bootstrap/2.0.4/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="鸟布鲸">
    <meta name="description" content="鸟布鲸---活去下">
    <title>商品生成</title>
</head>
<body>
    <fieldset>
      <div id="legend" class="">
        <legend class="">项目生成</legend>
      </div>
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">作品名称</label>
          <div class="controls">
            <input type="text" placeholder="作品名称" name="name" id="name" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">价格</label>
          <div class="controls">
            <input type="text" placeholder="价格" name="price" id="price" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">
          <!-- Select Basic -->
          <label class="control-label">绘画风格</label>
          <div class="controls">
            <select class="input-xlarge" name="style" id="style">
                <option>古典主义与学院主义</option>
                <option>浪漫主义</option>
                <option>现实主义</option>
                <option>写实主义和照像写实主义</option>
                <option>印象主义</option>
                <option>后印象主义</option>
                <option>野兽派</option>
                <option>立体主义</option>
                <option>未来主义</option>
                <option>抽象主义</option>
                <option>达达主义</option>
                <option>超现实主义</option></select>
          </div>
      </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">标签</label>
          <div class="controls">
            <input type="text" placeholder="标签" name="label" id="label" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">说明</label>
          <div class="controls">
            <input type="text" placeholder="" name="content" id="content" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
    <div class="control-group">
          <label class="control-label"></label>
          <!-- Button -->
          <div class="controls">
            <button  onclick="seedAjax()">确认</button>
          </div>
        </div>

    </fieldset>
  <script type="text/javascript" src="../artNet/js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript">
      function seedAjax() {
        var name = $("#name").val();
        var price = $("#price").val();
        var style = $.trim($("select[id=style]").find("option:selected").val());
        var label = $("#label").val();
        var content = $("#content").val();
        $.ajax({
          type: 'POST',
          url: '/ajax/dealajax',
          data: {
             name : name,
             price : price,
             style : style,
             label : label,
             content : content
          },
          dataType: 'json',
          success: function(data){
            console.log(data.status);
          },
          error: function(xhr, type){
          }
        });
      }
  </script>
</body>
</html>
