const clear = document.getElementById("clear");
const add = document.getElementById("add");
const input = document.getElementById("input");
const todos = document.getElementById("todos");
results = document.getElementById("result");


add.addEventListener("click",function (e) {
    e.preventDefault();
    let todoText = input.value;
    console.log(todoText);
    if(todoText) {
        const todoEl = document.createElement('li');
        todoEl.innerText = todoText;
        todos.appendChild(todoEl);
        console.log(todoEl);



        $.ajax({
            method : "POST",
            url: "/inc/send.php",
            data:{ 'list' : '"' +todoText +'"' },
            dataType: "json",
            success : result()
          });

    }
   
},false);

clear.addEventListener("click",function (e){
    $.ajax({
        url : "/inc/clear.php",
        data:{},
        success :cl()

    });

})


function result(){
    console.log("hello")
}
function cl(){
   
}

