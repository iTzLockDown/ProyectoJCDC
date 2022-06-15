var modulo = new Vue({
    el: '#crudModulo',
    created: function() {
        this.getModulo();
    },
    data:{
        modulos:[],
        nombreModulo: '',
        iconoModulo: '',
        estadoModulo: 1,
        errors: [],
        fillModulo: {id: '', nombreModulo:'', iconoModulo:''}
    },
    methods:
        {
            getModulo: function()
            {
                var urlModulo= 'modulo';
                axios.get(urlModulo).then(response =>{
                    this.modulos = response.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            deleteModulo: function (modulo){
                var url = 'modulo/'+ modulo.id;
                axios.delete(url).then(response =>
                {
                    this.getModulo();
                    toastr.warning('Eliminado correctamente.');
                });
            },
            createModulo: function (){
              var url = 'modulo';
              axios.post(url, {
                  nombre: this.nombreModulo,
                  icono: this.iconoModulo,
                  estado: this.estadoModulo,
              }).then(response=>{
                  this.getModulo();
                  this.nombreModulo = '';
                  this.iconoModulo = '';
                  this.errors =[];
                  $('#add_modulo').modal('hide');
                  toastr.success('Modulo creado correctamente.');
              }).catch(error =>
              {
                  this.errors = error.response.data;
              });
            },
            editModulo: function (modulo){
                console.log(modulo);
                this.fillModulo.id = modulo.id;
                this.fillModulo.nombreModulo = modulo.nombre;
                this.fillModulo.iconoModulo = modulo.icono;
                $('#update_modulo').modal('show');
            },
            updateModulo: function (id){
                var url = 'modulo/'+id;
                axios.put(url, {
                    id: this.fillModulo.id,
                    nombre: this.fillModulo.nombreModulo,
                    icono: this.fillModulo.iconoModulo,
                    estado: this.fillModulo.estadoModulo,
                }).then(response=>
                {
                   this.getModulo();
                   this.fillModulo= {'id': '', nombreModulo:'', iconoModulo:''}
                   this.errors = [];
                    $('#update_modulo').modal('hide');
                    toastr.success('Modulo editado correctamente.');
                }).catch(error=>
                {
                    this.errors = error.response.data;
                });
            },
        },
});


var menu = new Vue({
    el: '#crudMenu',
    created: function() {
        this.getMenu();
    },
    data:{
        menus:[],
        nombreMenu: '',
        moduloMenu: '',
        estadoMenu: 1,
        errors: [],
        fillMenu: {id: '', nombreMenu:'', moduloMenu:''}
    },
    methods:
        {
            getMenu: function()
            {
                var url= 'menu';
                axios.get(url).then(response =>{
                    this.menus = response.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            deleteMenu: function (menu){
                var url = 'menu/'+ menu.id;
                axios.delete(url).then(response =>
                {
                    this.getMenu();
                    toastr.warning('Eliminado correctamente.');
                });
            },
            createMenu: function (){
                var url = 'menu';
                axios.post(url, {
                    nombre: this.nombreMenu,
                    modulo: this.moduloMenu,
                    estado: this.estadoMenu,
                }).then(response=>{
                    this.getMenu();
                    this.nombreMenu = '';
                    this.moduloMenu = '',
                    this.estadoMenu = '';
                    this.errors =[];
                    $('#add_menu').modal('hide');
                    toastr.success('Menu creado correctamente.');
                }).catch(error =>
                {
                    this.errors = error.response.data;
                });
            },
            editModulo: function (menu){
                console.log(menu);
                this.fillMenu.id = menu.id;
                this.fillMenu.nombreMenu = menu.nombre;
                this.fillMenu.moduloMenu = menu.modulo;
                $('#update_menu').modal('show');
            },
            updateModulo: function (id){
                var url = 'modulo/'+id;
                axios.put(url, {
                    id: this.fillMenu.id,
                    nombre: this.fillMenu.nombreMenu,
                    modulo: this.fillMenu.moduloMenu,
                    estado: this.fillMenu.estadoModulo,
                }).then(response=>
                {
                    this.getMenu();
                    this.fillMenu= {'id': '', nombreMenu:'', moduloMenu:''}
                    this.errors = [];
                    $('#update_menu').modal('hide');
                    toastr.success('Menu editado correctamente.');
                }).catch(error=>
                {
                    this.errors = error.response.data;
                });
            },

            getModulo: function()
            {
                var urlModulo= 'modulo';
                axios.get(urlModulo).then(response =>{
                    this.modulos = response.data;
                }).catch(error => {
                    console.log(error)
                });
            },
        },
});
