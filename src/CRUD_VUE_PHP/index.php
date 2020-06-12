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
             <div class="alert alert-danger" v-if="errorMsg">Error</div>
             <div class="alert alert-success" v-if="successMsg">{{successMsg}}</div>
            
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
                           <th>Image</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                      </thead> 

                      <tbody>
                         <tr class="text-center" v-for="user in users">
                         <td>{{user.id}}</td> 
                         <td>{{user.name}} </td>
                         <td>{{user.email}}</td>
                         <td>{{user.phone_no}}</td>
                         <td><img :src="'uploads/'+user.image" width="70" height="70"/></td>
                         <td><a href="#" class="text-success"><i class="fas fa-edit" @click="editShowmsgDialog=true,fetchSingleData(user)"></i></a></td>
                         <td><a href="#" class="text-danger"><i class="fas fa-trash-alt" @click="deleteDialog=true,fetchSingleData(user)"></i></a></td>
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
                         <form action ="<?php echo $SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
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
                             <input type="file" id="file" ref="file">
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
                         <form action ="<?php echo $SERVER["PHP_SELF"];?>" method="POST">
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
                             <input type="file" ref="file">
                             <img :src="'uploads/'+currentUser.image" width="70" height="70"/>
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

            <!-- END-MESSAGE DIALOG BOX FOR DELETE--> 
                <div id="overlay" v-if="deleteDialog">
                  <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Delete User</h5>
                        <button type="button" class="close" @click="deleteDialog=false">
                           <span>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body p-4">
                        <h4>Are you sure you want to delete?</h4>
                        <hr>
                        <button class="btn btn-success btn-lg" @click="deleteUser()">Yes</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger btn-lg" @click="deleteDialog=false">No</button>
                      </div>
                    </div>
                    </div>
                 </div>
                 <!-- END-MESSAGE DIALOG BOX FOR DELETE-->

    </div>
    <!-- END OF PHP PART WITH ID=APP FOR VUEJS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    
    <script type="text/javascript">

      var app= new Vue({
      el:'#app',
      data: {
        
        file:'',
        errorMsg: "",
        successMsg:"",
        showmsgDialog:false,
        editShowmsgDialog:false,
        deleteDialog:false,
         details:{ 
              fullname:'',
              email:'',
              phone:'',
              
              },
              users:[],
              currentUser:{}
              
    },
    afterCreated()
      {
        this.getAllUsers();    
      },     

    methods:{
     getAllUsers()
     {
       
        axios.get('/learn-vue-cli/src/CRUD_VUE_PHP/getAllData.php')
        .then(response =>{
          // console.log(response.data);
          this.users=response.data;
        })
     },
    
     updateUser()
    {  
      this.file = this.$refs.file.files[0];
  
         let formData = new FormData();
         formData.append('image', this.file);
         formData.append('name', this.currentUser.name);
         formData.append('email', this.currentUser.email);
         formData.append('phone', this.currentUser.phone_no);
         formData.append('id', this.currentUser.id);                        
      axios.post('/learn-vue-cli/src/CRUD_VUE_PHP/updateData.php',formData
        
      )
        .then(response =>{         
             console.log(response.data);
          if(response.data)
          {
            this.successMsg=response.data;
            this.getAllUsers();
          }
          else{
            this.errorMsg='';
          }
        })
    },

    fetchSingleData(user)
    {     
      this.currentUser=user;    
    },   

    deleteUser()
    {      
        axios.post('/learn-vue-cli/src/CRUD_VUE_PHP/deleteData.php',{
          id:this.currentUser.id
        })
        .then(response =>{
          // console.log(response.data)
          if(response.data){
            this.deleteDialog=false
            this.successMsg=response.data
             this.getAllUsers();             
          }
        })
    },

      submitFormData:function()
      {
        if(this.details.fullname!=''&& this.details.email!=''&& this.details.phone!='')
           {   
            this.file = this.$refs.file.files[0];
  
         let formData = new FormData();
         formData.append('image', this.file);
         formData.append('name', this.details.fullname);
         formData.append('email', this.details.email);
         formData.append('phone', this.details.phone);                   
          axios.post('/learn-vue-cli/src/CRUD_VUE_PHP/process.php',
            formData,
          )
        .then(response =>{      
          console.log(response.data)   
          if(response.data)
          {
            this.successMsg=response.data;
            this.getAllUsers();
            this.details.fullname="",
            this.details.email="",
            this.details.phone=""
          }
          else{
            // alert("file not uploaded")
            this.errorMsg='';
          }
        })                 
           }
           else{
              alert("Fill all fields");
              this.showmsgDialog=false
              
           }
      },
    }
})
     </script>
    </body>
    </html>