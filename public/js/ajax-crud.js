$(document).ready(function() {

    var url = "/";//defines the URL that all Ajax calls will use.

    //display modal FORM for task editing
    $('.open-modal').click(function () {//open-modal is the class for the edit button
        var task_id = $(this).val();

        $.get(url + 'tasks/' + task_id, function (data) {//refer to your edit route

            //success data
            console.log(data);
            $('#task_id').val(data.id);//id button
            $('#task').val(data.task);//id of the task input space
            $('#description').val(data.description);// id of the description input space
            $('#btn-save').val("update");//btn-save is the id of the button 'save changes'

            $('#myModal').modal('show');//id of the modal

        })
    });
            //display modal FORM for creating a new task
            $('#btn-add').click(function(){
                $('#btn-save').val("add");//id for the save changes button
                $('#frmTasks').trigger("reset");//id name for the form
                $('#myModal').modal('show');//id of the modal
            });

            //delete task and remove it from list
            $('.delete-task').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var task_id = $(this).val();

                $.ajax({

                    type: "DELETE",
                    url: url + 'tasks/' + task_id,
                    success: function (data){
                        console.log(data);

                        $('#task' + task_id).remove();
                    },
                    error: function (data) {
                        console.log('Error:', data)
                    }
                });
            });
// });


    //create new task /update existing task using the data from the modal form
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var formData = {
            task: $('#task').val(),
            description: $('#description').val(),
        }

        //used to determine the HTTP verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var task_id = $('#task_id').val();
        var my_url = url;

        if (state == "add") {
            var type = "POST";//FOR CREATING A NEW RESOURCE
            my_url += 'tasks';
        }else if(state == "update"){
            type = 'PUT';//FOR UPDATING AN EXISTING RESOURCE
            my_url += 'tasks/' + task_id;

        }

        console.log(formData);
    // });hjsayfu



        //
        // var state = $("#btn-save").val();
        // var type = "POST"; //for creating new resource
        // var task_id = $('#task_id').val();
        // var my_url = url;
        //
        // if (state == "update"){
        //     type = "PUT"; //for updating existing resource
        //     my_url += 'tasks/' + task_id;
        // }else{
        //     my_url+='tasks'
        // }
        //
        //
        // console.log(formData);

        //FUNCTION OF AJAX IS TO POST TO THE SERVER WHAT IT HAS RECEIVED FROM THE BROWSER
        $.ajax({
            type:type,
            url:my_url,
            data: formData,
            dataType: 'json',
            success:function (data) {
                console.log(data);
                //posting to server
                //1.how to post from each row(task_id,task and description)
                var task = '<tr id="task' + data.id + '"></tr><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                task += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value=" ' + data.id + ' ">Edit</button>';
                task += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Delete</button></td>';

                if (state == "add") {//if user added a new record
                    $('#tasks-list').append(task);//adding the new task to the other tasks in the list.
                } else {//if user updated an existing record
                    $('#task' + task_id).replaceWith(task);//editing tasks
                }

                $('#frmTasks').trigger("reset");//renew the form according to the actions that have taken place

                $('#myModal').modal('hide')//hide the modal after the actions are implemented

            },
            error: function(data){
                console.log('Error:',data);

            }
        });
    });
});
