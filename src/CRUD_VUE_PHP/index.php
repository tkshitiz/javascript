    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD VUE PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/36973bb015.js" crossorigin="anonymous"></script>
        <style type="text/css">
          #overlay{
             position:fixed;
             background:rgba(0,0,0,0.6);
             top:0;
             right:0;
             bottom:0;
             left:0;
          }
        </style>
    </head>
    <body>
    <div id="app">
        <div class="container-fluid">
            <div class="row bg-dark">
               <div class="col-lg-12">
                 <p class="text-center text-light display-4 ">CRUD APPLICATION USING VUE JS ,PHP,MYSQL </p>
               </div>
            </div>
        </div>
      <!-- REGISTERED USERS -->
        <div class="container">
           <div class="row mt-3">
              <div class="col-lg-6">
                  <h3 class="text-info">Registered Users</h3>
              </div>
              <div class="col-lg-6">
                  <button class="btn btn-info float-right" @click="showmsgDialog=true">
                    <i class="fas fa-user"></i>&nbsp;&nbsp;Add new user
                  </button>
              </div>
           </div>
             <hr class="bg-info">
             <div class="alert alert-danger" v-if="errorMsg">Error Message</div>
             <div class="alert alert-success" v-if="successMsg">Success</div>
            
            <!-- DISPLAYING RECORDS -->
            <div class="row">
               <div class="col-lg-12">
                  <table class="table table-bordered table-striped"> 
                     <thead>
                        <tr class="text-center bg-info text-light">
                           <th>ID</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                      </thead> 

                      <tbody  >
                         <tr class="text-center" v-for="user in users">
                         <td>{{user.id}}</td>
                         <td>{{user.name}} </td>
                         <td>{{user.email}}</td>
                         <td>{{user.phone_no}}</td>
                         <td><a href="#" class="text-success"><i class="fas fa-edit" @click="editShowmsgDialog=true,fetchSingleData(user)"></i></a></td>
                         <td><a href="#" class="text-danger"><i class="fas fa-trash-alt" @click="deleteUser(user.id)"></i></a></td>
                         </tr>
                      </tbody> 
                     </table> 
                 </div>
              </div>
          </div>
         <!-- END-REGISTERED-USERS -->

            <!-- MESSAGE DIALOG BOX -->
               <div id="overlay" v-if="showmsgDialog">
                 <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="close" @click="showmsgDialog=false">
                           <span>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body p-4">
                         <form action ="" method="POST">
                           <div class="form-group">
                             <input type="text" name="name" v-model="details.fullname" class="form-control form-control-lg" placeholder="Name">
                           </div>

                           <div class="form-group">
                             <input type="text" name="email" v-model="details.email" class="form-control form-control-lg" placeholder="email">
                           </div>

                           <div class="form-group">
                             <input type="text" name="phone" v-model="details.phone" class="form-control form-control-lg" placeholder="phone">
                           </div>

                           <div class="form-group">
                             <button type="submit"  class="btn btn-info btn-block btn-lg" @click="submitFormData" >Add User</button>
                           </div>
                         </form>
                        </div>
                      </div>                      
                   </div>
                 </div>
                <!-- modal-dialog -->
             
              <!-- MESSAGE DIALOG BOX FOR UPDATE -->
              <div id="overlay" v-if="editShowmsgDialog">
                 <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit New User</h5>
                        <button type="button" class="close" @click="editShowmsgDialog=false">
                           <span>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body p-4">
                         <form action ="" method="POST">
                           <div class="form-group">
                             <input type="text" name="name" v-model="currentUser.name" class="form-control form-control-lg" placeholder="Name">
                           </div>

                           <div class="form-group">
                             <input type="text" name="email" v-model="currentUser.email" class="form-control form-control-lg" placeholder="email">
                           </div>

                           <div class="form-group">
                             <input type="text" name="phone" v-model="currentUser.phone_no" class="form-control form-control-lg" placeholder="phone">
                           </div>
                              
                           <div class="form-group">
                             <button type="submit"  class="btn btn-info btn-block btn-lg" @click="updateUser()" >Update User</button>
                           </div>
                         </form>
                        </div>
                      </div>                      
                   </div>
                 </div>
                <!-- END-MESSAGE DIALOG BOX FOR UPDATE-->
              

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    
    <script type="text/javascript">

      var app= new Vue({
      el:'#app',
      data: {
        
        errorMsg: false,
        successMsg:false,
        showmsgDialog:false,
        editShowmsgDialog:false,
         details:{ 
              fullname:'',
              email:'',
              phone:'',
              
              },
              users:[],
              currentUser:{}
              
    },
    created()
      {
        this.updateUser();
        this.getAllUsers();
        
        
      },
      

    methods:{
     getAllUsers()
     {
       
        axios.get('/learn-vue-cli/src/CRUD_VUE_PHP/getAllData.php')
        .then(response =>{
          console.log(response.data);
          this.users=response.data;
        })
     },

    
     updateUser()
    {
      
                         
      axios.post('/learn-vue-cli/src/CRUD_VUE_PHP/updateData.php',{
        id:this.currentUser.id,
        name:this.currentUser.name,
        email:this.currentUser.email, 
        phone:this.currentUser.phone_no
      })
        .then(response =>{
          console.log(response.data);
          
        })
    },


    deleteUser(userID)
    {
       axios.get('/learn-vue-cli/src/CRUD_VUE_PHP/deleteData.php?id='+userID)
        .then(response =>{
          this.getAllUsers();
          
        })
    },

    
    fetchSingleData(user)
    {
      this.currentUser=user;
    },   


      submitFormData:function()
      {
         if(this.details.fullname!=''&& this.details.email!=''&& this.details.phone!='')
           {
            var bodyFormData = new FormData();
            bodyFormData.set('name',this.details.fullname);
            bodyFormData.set('email',this.details.email);
            bodyFormData.set('phone',this.details.phone);            
            axios({
              
              url:'/learn-vue-cli/src/CRUD_VUE_PHP/process.php',
              method:'POST',
              action:'insert',
              data: bodyFormData,              
              
            }).then(function(response){
              console.log(response.data);
            })
            .catch(function (error) {
               console.log(error);
            });
            
             
           }

           else{
            
              alert("Fill all fields");
              
           }
      },
      


    }
})
     </script>
    </body>
    </html>