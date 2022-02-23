<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="clickme()">clcikme</button>

    <div id="showdata" name="showdata"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>



    const clickme= ()=>{
        $.ajax({
            method:"get",
            url:"queryusers.php",
            success:function(result){
                let info="";
                let showdata=document.getElementById('showdata');
                let data_=JSON.parse(result);
                if(data_){
                    data_.map((e)=>{
                        info = info+"<div>Nombre:"+e.name+"  cedula:"+e.number_id+"</div>"
                    })
                    $("#showdata").html(info)
                }
                
            },
            error:function(result){
                console.log(result);

            }
        })
    }
</script>
</body>
</html>