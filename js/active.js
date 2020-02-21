$(function(){
  var current = location.pathname;
  var splitValue = current.split('/');
//   console.log(splitValue[3]);
  $('#sidenav li a').each(function(){
      var $this = $(this);
    //   console.log($this.attr('class'));
      if($this.attr('href') == splitValue[3]){

            // $this[0].addClass('active')
            console.log($this[0].className);
            // console.log('yes');
        var parentElem = $this.parent();
        console.log(parentElem);
        if(parentElem.addClass('activeness')){
          console.log(true);
        }
      }
  })
})

$(function(){
  var current = location.pathname;
  var splitValue = current.split('/');
//   console.log(splitValue[3]);
  $('#sidenav li a').each(function(){
      var $this = $(this);
    console.log($this.attr(splitValue[3]));
      // if($this.attr('href') == splitValue[3]){
      //   // $this[0].addClass('active')
      //   console.log($this[0].className);
      //   // console.log('yes');
      //   var parentElem = $this.parent();
      //   console.log(parentElem);
      //   if(parentElem.addClass('activeness')){
      //     console.log(true);
      //   }
      // }
  })
})
