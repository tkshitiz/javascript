export default{
    filters:{
        makeUpperCase: function(value)
        {
           return value.toUpperCase();
        },
   
        contentSnippet :function(value)
        {
           return value.slice(0,100)+"...";
        }
      }
}