//router
//Router.route('/', function (){
//    this.render('Home', {
//        data: function() {return Items.findOne({id: this.params._id});}
//    })
//});

//home page
Router.route('/', function(){
    this.layout('navbar')
    this.render('Home');
});

//Ad page
Router.route('adpage', function(){
    this.layout('navbar')
    this.render('adPage');
})

//All ads
Router.route('allads', function(){
    this.layout('navbar')
    this.render('allAds');
})