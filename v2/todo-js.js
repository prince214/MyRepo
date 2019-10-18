// Select the Elements

const input = document.getElementById("input");

// Classes names
const CHECK = "fa-check-circle";
const UNCHECK = "fa-circle-thin";
const LINE_THROUGH = "lineThrough";


// add to do function
function addToDo(toDo,done,element){
    
    const DONE = done ? CHECK : UNCHECK;
    const LINE = done ? LINE_THROUGH : "";
    
    const item = `<li class="item"  style="display: inline;">
                    <i class="fa ${DONE} co" job="complete" ></i>
                    <p class="text ${LINE}">${toDo}</p>
                    <i class="fa fa-trash-o de" job="delete"></i>
                  </li>
                `;
    
    const position = "beforeend";

    console.log(element);
    
    element.insertAdjacentHTML(position, item);
}




function AddingTODO_LIST(){
    var myCookie = getCookie("username");
        if(myCookie == "Prince"){
            const toDo = input.value;
            var list = document.getElementById("list");
            if(toDo){
                addToDo(toDo,false,list);
            }
            input.value = "";
        }
        else{
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'You are not Logged in',
              })
        }
    
}


//When user click ADD Button
document.getElementById("butt").addEventListener("click", AddingTODO_LIST);

// add an item to the list user the enter key
document.addEventListener("keyup",function(even){
    if(event.keyCode == 13){
        AddingTODO_LIST();
    }
});


// Check, uncheck and linethrough events
function completeToDo(element){
    element.classList.toggle(CHECK);
    element.classList.toggle(UNCHECK);
    element.parentNode.querySelector(".text").classList.toggle(LINE_THROUGH);
    
}

// remove todo
function removeToDo(element){
    element.parentNode.parentNode.removeChild(element.parentNode);
}

//Event on Check, Uncheck and Delete
list.addEventListener("click", function(event){
    const element = event.target; 
    // console.log(element);
    const elementJob = element.attributes.job.value;
    // console.log(elementJob);
    
    if(elementJob == "complete"){
        completeToDo(element);
    }else if(elementJob == "delete"){
        removeToDo(element);
    }
});


$(document).ready(function(){
    $(".test i").on("click", function(){
          var element = $(this).data('id');
          console.log(element);
          element.parentNode.querySelector(".text").classList.toggle(LINE_THROUGH);
    });
});


/****************     Creating Boards  ********** */
const board_id = document.getElementById('board');
const c_board = document.getElementById('input_board');
const i_board = document.getElementById('add-board-icon');

var x = 0;
function create_board(store){

    const item = `
    <div class="form-group col-lg-5 col-sm-12 border m-2 rounded  ">
                            <div class="col-md-12 mt-4 mb-4">
                                <i class="fas fa-th-list ">
                                </i><span class="ml-2 text-primary">${store}</span></div>
                            <div class="col-md-12 content ">
                            <ul id="list+${x}" class="list-group">
                                <!-- Listing of the todo list items  -->
                            </ul>
                                <div class="form-group">
                                <div class="input-group">
                                        <input type="text" id="id+${x}" data-id="input+${x}" class="form-control check_input" placeholder="Enter Tasks">
                                        <div class="input-group-append">
                                        <button data-id="${x}" id= "i_check${x}" onclick="dynamic_test()" class="btn btn-primary check_data" type="button">
                                            <span>ADD</span>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    `;
    x++;
    const position = "beforeend";
    board_id.insertAdjacentHTML(position,item);
}


var j = 0;
function dynamic_test(){
    var element = $('#i_check'+j).data('id');
    console.log("dynamic_test - id :"+element);
    dynamic_add(element);
    j++;

}

function dynamic_add(element){
    var t_id = "id+" + element;
    var temp = document.getElementById(t_id).value; 

    element = "list+"+element;
    console.log("list-id =" +element);

    if(temp){
        console.log("add data = "+temp);
        var final = document.getElementById(element);
        console.log(addToDo(temp,false,final));
        // testing(temp,element);
    }
}

function testing(temp,element){
  var para = document.createElement("li");
  para.innerHTML = temp;
  document.getElementById(element).appendChild(para);
}


function check_c_board(){
    const store = c_board.value;
    if(store){
        create_board(store);
    }
    c_board.value = "";
}
document.getElementById('input_board').addEventListener("click",check_c_board);

document.getElementById('sub-btn').addEventListener("click",test);
    
function test(){
   checkCookie();
}
 
document.getElementById('testt').addEventListener("click",cu_uc);
function cu_uc(){
        var myCookie = getCookie("username");
        console.log(myCookie);
        // if (myCookie != null && myCookie !="") {
            if (document.cookie.indexOf("username=") >= 0) {
            alert("Cookie name is Prince");
        }
        else {
            
        }
    
}






