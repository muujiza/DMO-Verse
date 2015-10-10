new Vue({
    el: '#registerForm', 

    data: {
        newRegister: {
            username: '',
            password: '',
            password_confirmation: '',
            email: '',
            birthdate: '',
        },

        submitted: false
    },

    computed: {
        errors: function() {
            for (var key in this.newRegister) {
                if ( ! this.newRegister[key]) return true;
            }

            return false;
        }
    },

    methods: {
        submitForm: function(e) {
            e.preventDefault();

            var serializedData  = $("#register").serialize()
            var registrar = this.newRegister;
            registrar['g-recaptcha-response'] = serializedData['g-recaptcha-response'];

            console.log(registrar);

            this.$http.post('http://api-v1.dev.comico.my/auth/register', registrar);
            
           // this.submitted = true;
        }
    }


});