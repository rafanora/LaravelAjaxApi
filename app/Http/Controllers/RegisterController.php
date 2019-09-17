<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{

    public function cities(){
        $result = array();
        $result = ['Agua Santa ','Agudo','Ajuricaba','Alecrim','Alegrete','Alegria','Alpestre','Alto Alegre','Alto Feliz','Alvorada','Amaral Ferrador','Ametista do Sul','Andre da Rocha','Anta Gorda','Antonio Prado','Arambare','Ararica','Aratiba','Arroio Grande','Arroio do Meio','Arroio do Sal','Arroio do Tigre','Arroio dos Ratos','Arvorezinha','Augusto Pestana','Aurea','Bage','Balneario Pinhal','Barao de Cotegipe','Barao do Triunfo','Barao','Barra Funda','Barra do Guarita','Barra do Quarai','Barra do Ribeiro','Barra do Rio Azul','Barracao','Barros Cassal','Benjamin Constant do Sul','Bento Goncalves','Boa Vista das Missoes','Boa Vista do Burica','Boa Vista do Sul','Bom Jesus','Bom Principio','Bom Progresso','Bom Retiro do Sul','Boqueirao do Leao','Bossoroca','Braga','Brochier','Butia','Cacapava do Sul','Cacequi','Cachoeira do Sul','Cachoeirinha','Cacique Doble','Caibate','Caicara','Camaqua','Camargo','Cambara do Sul','Campestre da Serra','Campina das Missoes','Campinas do Sul','Campo Bom','Campo Novo','Campos Borges','Candelaria','Candido Godoi','Candiota','Canela','Cangucu','Canoas','Capao da Canoa','Capao do Leao','Capela de Santana','Capitao','Capivari do Sul','Caraa','Carazinho','Carlos Barbosa','Carlos Gomes','Casca','Caseiros','Catuipe','Caxias do Sul','Centenario','Cerrito','Cerro Branco','Cerro Grande do Sul','Cerro Grande','Cerro Largo','Chapada','Charqueadas','Charrua','Chiapeta','Chui','Chuvisca','Cidreira','Ciriaco','Colinas','Colorado','Condor','Constantina','Coqueiros do Sul','Coronel Barros','Coronel Bicaco','Cotipora','Coxilha','Crissiumal','Cristal do Sul','Cristal','Cruz Alta','Cruzeiro do Sul','David Canabarro','Derrubadas','Dezesseis de Novembro','Dilermano de Aguiar','Dois Irmaos das Missoes','Dois Irmaos','Dois Lajeados','Dom Feliciano','Dom Pedrito','Dom Pedro de Alcantara','Dona Francisca','Doutor Mauricio Cardoso','Doutor Ricardo','Eldorado do Sul','Encantado','Encruzilhada do Sul','Engenho Velho','Entre Rios do Sul','Entre-Ijuis','Erebango','Erechim','Ernestina','Erval Grande','Erval Seco','Esmeralda','Esperanca do Sul','Espumoso','Estacao','Estancia Velha','Esteio','Estrela Velha','Estrela','Eugenio de Castro','Fagundes Varela','Farroupilha','Faxinal do Soturno','Faxinalzinho','Fazenda Vilanova','Feliz','Flores da Cunha','Floriano Peixoto','Fontoura Xavier','Formigueiro','Fortaleza dos Valos','Frederico Westphalen','Garibaldi','Garruchos','Gaurama','General Camara','Gentil','Getulio Vargas','Girua','Glorinha','Gramado Xavier','Gramado dos Loureiros','Gramado','Gravatai','Guabiju','Guaiba','Guapore','Guarani das Missoes','Harmonia','Herval','Herveiras','Horizontina','Hulha Negra','Humaita','Ibarama','Ibiaca','Ibiraiaras','Ibirapuita','Ibiruba','Igrejinha','Ijui','Ilopolis','Imbe','Imigrante','Independencia','Inhacora','Ipe','Ipiranga do Sul','Irai','Itaara','Itacurubi','Itapuca','Itaqui','Itatiba do Sul','Ivora','Ivoti','Jaboticaba','Jacutinga','Jaguarao','Jaguari','Jaquirana','Jari','Joia','Julio de Castilhos','Lagoa Vermelha','Lagoa dos Tres Cantos','Lagoao','Lajeado do Bugre','Lajeado','Lavras do Sul','Liberato Salzano','Lindolfo Collor','Linha Nova','Macambara','Machadinho','Mampituba','Manoel Viana','Maquine','Marata','Marau','Marcelino Ramos','Mariana Pimentel','Mariano Moro','Marques de Souza','Mata','Mato Castelhano','Mato Leitao','Maximiliano de Almeida','Minas do Leao','Miraguai','Montauri','Monte Alegre dos Campos','Monte Belo do Sul','Montenegro','Mormaco','Morrinhos do Sul','Morro Redondo','Morro Reuter','Mostardas','Mucum','Muitos Capoes','Muliterno','Nao-Me-Toque','Nicolau Vergueiro','Nonoai','Nova Alvorada','Nova Araca','Nova Bassano','Nova Boa Vista','Nova Brescia','Nova Candelaria','Nova Esperanca do Sul','Nova Hartz','Nova Padua','Nova Palma','Nova Petropolis','Nova Prata','Nova Ramada','Nova Roma do Sul','Nova Santa Rita','Novo Barreiro','Novo Cabrais','Novo Hamburgo','Novo Machado','Novo Tiradentes','Osorio','Paim Filho','Palmares do Sul','Palmeira das Missoes','Palmitinho','Panambi','Pantano Grande','Parai','Paraiso do Sul','Pareci Novo','Parobe','Passa Sete','Passo Fundo','Passo do Sobrado','Paverama','Pedro Osorio','Pejucara','Pelotas','Picada Cafe','Pinhal Grande','Pinhal','Pinheirinho do Vale','Pinheiro Machado','Pirapo','Piratini','Planalto','Poco das Antas','Pontao','Ponte Preta','Portao','Porto Alegre','Porto Lucena','Porto Maua','Porto Vera Cruz','Porto Xavier','Pouso Novo','Presidente Lucena','Progresso','Protasio Alves','Putinga','Quarai','Quevedos','Quinze de Novembro','Redentora','Relvado','Restinga Seca','Rio Grande','Rio Pardo','Rio dos Indios','Riozinho','Roca Sales','Rodeio Bonito','Rolante','Ronda Alta','Rondinha','Roque Gonzales','Rosario do Sul','Sagrada Familia','Saldanha Marinho','Salto do Jacui','Salvador das Missoes','Salvador do Sul','Sananduva','Santa Barbara do Sul','Santa Clara do Sul','Santa Cruz do Sul','Santa Maria do Herval','Santa Maria','Santa Rosa','Santa Tereza','Santa Vitoria do Palmar','Santana da Boa Vista','Santana do Livramento','Santiago','Santo Angelo','Santo Antonio da Patrulha','Santo Antonio das Missoes','Santo Antonio do Palma','Santo Antonio do Planalto','Santo Augusto','Santo Cristo','Santo Expedito do Sul','Sao Borja','Sao Domingos do Sul','Sao Francisco de Assis','Sao Francisco de Paula','Sao Gabriel','Sao Jeronimo','Sao Joao da Urtiga','Sao Joao do Polesine','Sao Jorge','Sao Jose das Missoes','Sao Jose do Herval','Sao Jose do Hortencio','Sao Jose do Inhacora','Sao Jose do Norte','Sao Jose do Ouro','Sao Jose dos Ausentes','Sao Leopoldo','Sao Lourenco do Sul','Sao Luiz Gonzaga','Sao Marcos','Sao Martinho da Serra','Sao Martinho','Sao Miguel das Missoes','Sao Nicolau','Sao Paulo das Missoes','Sao Pedro da Serra','Sao Pedro do Butia','Sao Pedro do Sul','Sao Sebastiao do Cai','Sao Sepe','Sao Valentim do Sul','Sao Valentim','Sao Valerio do Sul','Sao Vendelino','Sao Vicente do Sul','Sapiranga','Sapucaia do Sul','Sarandi','Seberi','Sede Nova','Segredo','Selbach','Senador Salgado Filho','Sentinela do Sul','Serafina Correa','Serio','Sertao Santana','Sertao','Sete de Setembro','Severiano de Almeida','Silveira Martins','Sinimbu','Sobradinho','Soledade','Tabai','Tapejara','Tapera','Tapes','Taquara','Taquari','Taquarucu do Sul','Tavares','Tenente Portela','Terra de Areia','Teutonia','Tiradentes do Sul','Toropi','Torres','Tramandai','Travesseiro','Tres Arroios','Tres Cachoeiras','Tres Coroas','Tres Forquilhas','Tres Palmeiras','Tres Passos','Tres de Maio','Trindade do Sul','Triunfo','Tucunduva','Tunas','Tupanci do Sul','Tupancireta','Tupandi','Tuparendi','Turucu','Ubiretama','Uniao da Serra','Unistalda','Uruguaiana','Vacaria','Vale Real','Vale Verde','Vale do Sol','Vanini','Venancio Aires','Vera Cruz','Veranopolis','Vespasiano Correa','Viadutos','Viamao','Vicente Dutra','Victor Graeff','Vila Flores','Vila Langaro','Vila Maria','Vila Nova do Sul','Vista Alegre do Prata','Vista Alegre','Vista Gaucha','Vitoria das Missoes','Xangri-la'];
        return json_encode($result);
    }

    public function registers(){
        $result = Register::all();
        return json_encode($result);
    }
/**
     * Show the form for creating a new resource.
     * API
     * @return \Illuminate\Http\Response
     */
    public function createapi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'ddl_city' => 'required'
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

        if ( $request->get('id') > 0 ) {
            return $this->_edit($request);
        }else{
            return $this->_create($request);
        }
    }

    /**
     * Show the form for creating a new resource.
     * FORM
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'ddl_city' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }
        
        if ( $request->get('id') > 0 ) {
            $this->_edit($request);
        }else{
            $this->_create($request);
        }

        return view('register');
    }

    private function _create(Request $request){
        try {
            return(json_decode($request));
            
            $name = $request->get('name');
            $city = $request->get('ddl_city');

            $registers = new Register();
            $registers->name = $name;
            $registers->city = $city;
            $registers->save();
    
            return json_encode(true);
        } catch (\Throwable $th) {
            return json_encode(false);
        }
    }

    private function _edit($request){
        try {
            $name = $request->get('name');
            $city = $request->get('ddl_city');
            $id = $request->get('id');
            
            $registers = Register::find($id);
            $registers->name = $name;
            $registers->city = $city;
            $registers->save();
    
            return json_encode(true);
        } catch (\Throwable $th) {
            throw $th;
            return json_encode(false);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "INDEX";
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request)
    public function destroy($id)
    {
        try {
            Register::find($id)->delete();
            return json_encode(true);
        
        } catch (\Throwable $th) {
            return json_encode($th);
        }
        
    }
}
