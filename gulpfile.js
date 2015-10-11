var elixir = require('laravel-elixir');

dir = {
	asset: {
    	css: 'public/assets/css',
    	js: 'public/assets/js',
	},
  	resources: {
    	css: 'resources/assets/css',
    	js: 'resources/assets/js',
    	less: 'resources/assets/less'    
  	}
};

elixir.config.sourcemaps = false;

elixir(function(mix) {
	 /*
   	 | Compile less into verse.css
	 */
   	mix.less('verse.less', dir.resources.css+'/verse.css');
   	/*
     | Compile Stylesheets into comico.css
     */
    mix.styles([
        'verse.css'
        ], dir.asset.css+'/dmo-verse.css', dir.resources.css
    );

    /*
     | Compile uikit core scripts into uikit-core.js
     */
   	mix.scripts([  
      'core.js',
    	'alert.js',
    	'button.js',
    	'cover.js',
    	'dropdown.js',
    	'grid.js',
    	'modal.js',
    	'nav.js',
    	'offcanvas.js',
    	'scrollspy.js',
    	'smooth-scroll.js',
    	'switcher.js',
    	'tab.js',
    	'toggle.js',
    	'touch.js',
    	'utility.js'
    	],
    	dir.resources.js+'/libs/uikit/uikit-core.js', 
    	dir.resources.js+'/libs/uikit/core'
    );

    /*
     | Compile uikit component scripts into uikit-core.js
     */
   	mix.scripts([  
   		'accordion.js',
    	'autocomplete.js',
    	'datepicker.js',
    	'form-password.js',
    	'form-select.js',
    	'grid.js',
    	'autocomplete.js',
    	'htmleditor.js',
    	'lightbox.js',
    	'nestable.js',
    	'notify.js',
    	'pagination.js',
    	'parallax.js',
    	'search.js',
    	'slider.js',
    	'slideset.js',
    	'slideshow.js',
    	'sortable.js',
    	'sticky.js',
    	'timepicker.js',
    	'tooltip.js',
    	'upload.js'
    	], 
    	dir.resources.js+'/libs/uikit/uikit-components.js', 
    	dir.resources.js+'/libs/uikit/components'
    );

    /*
     | Compile scripts into libs.js
     */
   	mix.scripts([  
    	'jquery-2.1.3.min.js',                 
        'vue/vue.js',                              
        'vue/vue-resource.js',
        'uikit/uikit-core.js',
        'uikit/uikit-components.js',		                              
    	], dir.resources.js+'/libs.js', dir.resources.js+'/libs'
    );

   	/*
     | Compile scripts into comico.js
     */
    mix.scripts([   
    	'libs.js',                                          
        ], dir.asset.js+'/dmo-verse.js', dir.resources.js
    );
    	
    mix.browserSync({ 
    	proxy:'dmo-verse.comico.my' 
    });
});
