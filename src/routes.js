// import components
import Home from './pages/Home.vue'
import Contact from './pages/Contact.vue'
import About from './pages/About.vue'
import Services from './pages/Services.vue'

//*************/ ROUTES***********//
export default
[
  {path:"/",component:Home  }, 
  {path:"/about",component:About },    
  {path:"/contact",component:Contact },
  {path:"/services",component:Services }  
];
