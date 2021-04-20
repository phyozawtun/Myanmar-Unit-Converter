// Initialize your app
var myApp = new Framework7();

// Export selectors engine
var $$ = Dom7;

// Add views
var view1 = myApp.addView('#view-1');
var view2 = myApp.addView('#view-2', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true
});

var kyat_pell_ywee_2_gram = myApp.addView('kyat_pell_ywee_2_gram.html');
var gram_2_kyat_pell_ywee = myApp.addView('gram_2_kyat_pell_ywee.html');
var kyat_2_kyat_pell_ywee = myApp.addView('kyat_2_kyat_pell_ywee.html');
var kyat_pell_ywee_2_kyat = myApp.addView('kyat_pell_ywee_2_kyat.html');
var shwe_15_pell_2_16_pell = myApp.addView('15_pell_2_16_pell.html',function(){
    /*
    $$('#15_pell_2_16_pell_form').on('form:success', function (e) {
      alert('submit');
      $$('#15_pell_2_16_pell_ans').html('Data is sending');
      var xhr = e.detail.xhr; // actual XHR object
      var data = e.detail.data; // Ajax response from action file
      $$('#15_pell_2_16_pell_ans').html(data);
    });
    */
});
var shwe_16_pell_2_15_pell = myApp.addView('16_pell_2_15_pell.html');