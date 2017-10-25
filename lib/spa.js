;(function($) {
      var app = $.sammy('#maincontent', function() {

        // this.debug = true;
        // var form_fields = null;

        this.get('#/', function() {
          this.partial('../views/scheduled.php');
        });

        this.get('#/scheduled/', function(context) {
          this.partial('../views/scheduled.php');
        });

        this.get('#/analyse/', function() {
          this.partial('../views/analyse.php');
        });

        this.get('#/record/', function(context) {
          this.partial('../views/record.php?gameid='+context.params.id);
        });

        // this.get('#/redirect', function() {
        //   this.redirect('#/');
        // });

        // this.get('#/form', function() {
        //   this.partial('files/form.html');
        // });

        // this.post('#/pretend/post/url', function() {
        //   form_fields = this.params;
        //   this.log($.param(form_fields.toHash()));
        //   this.redirect('#/display');
        // });

        // this.get('#/display', function() {
        //   if (form_fields) {
        //     this.app.swap(form_fields.toHTML());
        //   } else {
        //     this.redirect('#/form')
        //   }
        // });

      });

      $(function() {
        app.run('#/');
      });

    })(jQuery);
