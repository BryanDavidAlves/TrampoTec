<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <img class="cima" src="../img/imagemfundocima.png" alt="">
        <img class="baixo" src="../img/imagemfundobaixo.png" alt="">

        <section class="login">
            <div class="box-formulario">
                <h1>Cadastro Etec</h1>
                <a class="link-login" href="login.php">Ja tem uma conta? Faça seu login</a>
                <form action="../back-end/cadastro/salvarCadastro.php" method="post">
                    <div class="item-form">

                        <div class="form-group">
                            <label for="municipio">SEU MUNICIOPIO : </label>
                            <select name="municipio" ="Selecione a Etec">
                                <option selected="selected" value="Selecione">Selecione</option>
                                <option value="ETEC ABDIAS DO NASCIMENTO - SÃO PAULO - 224"> SÃO PAULO </option>
                                <option value="ETEC ADOLPHO BEREZIN - MONGAGUÁ - 107"> MONGAGUÁ </option>
                                <option value="ETEC ALBERT EINSTEIN - SÃO PAULO - 023"> SÃO PAULO </option>
                                <option value="ETEC ALBERTO SANTOS DUMONT - GUARUJÁ - 152"> GUARUJÁ </option>
                                <option value="ETEC ALCIDES CESTARI - MONTE ALTO - 255">MONTE ALTO</option>
                                <option value="ETEC AMIM JUNDI - OSVALDO CRUZ - 027">OSVALDO CRUZ</option>
                                <option value="ETEC ÂNGELO CAVALHEIRO - SERRANA - 214">SERRANA</option>
                                <option value="ETEC ANTONIO DE PÁDUA CARDOSO - BATATAIS - 030">BATATAIS</option>
                                <option value="ETEC ANTONIO DEVISATE - MARÍLIA - 031">MARÍLIA</option>
                                <option value="ETEC ANTONIO JUNQUEIRA DA VEIGA - IGARAPAVA - 033">IGARAPAVA</option>
                                <option value="ETEC ARISTÓTELES FERREIRA - SANTOS - 035">SANTOS</option>
                                <option value="ETEC ARNALDO PEREIRA CHEREGATTI - AGUAÍ - 215">AGUAÍ</option>
                                <option value="ETEC ASTOR DE MATTOS CARVALHO - CABRÁLIA PAULISTA - 038">CABRÁLIA PAULISTA</option>
                                <option value="ETEC AUGUSTO TORTOLERO ARAÚJO - PARAGUAÇU PAULISTA - 039">PARAGUAÇU PAULISTA</option>
                                <option value="ETEC BARTOLOMEU BUENO DA SILVA - ANHANGUERA - SANTANA DE PARNAÍBA - 262">ANHANGUERA</option>
                                <option value="ETEC BENEDITO STORANI - JUNDIAÍ - 042">JUNDIAÍ</option>
                                <option value="ETEC BENTO CARLOS BOTELHO DO AMARAL - GUARIBA - 256">GUARIBA</option>
                                <option value="ETEC BENTO QUIRINO - CAMPINAS - 043">CAMPINAS</option>
                                <option value="ETEC CARLOS DE CAMPOS - SÃO PAULO - 045">SÃO PAULO</option>
                                <option value="ETEC CAROLINA CARINHATO SAMPAIO - SÃO PAULO - 134">SÃO PAULO</option>
                                <option value="ETEC CEPAM - SÃO PAULO - 223">SÃO PAULO </option>
                                <option value="ETEC CÔNEGO JOSÉ BENTO - JACAREÍ - 048">JACAREÍ</option>
                                <option value="ETEC CONSELHEIRO ANTONIO PRADO - CAMPINAS - 007">CAMPINAS</option>
                                <option value="ETEC CORONEL FERNANDO FEBELIANO DA COSTA - PIRACICABA - 056">PIRACICABA</option>
                                <option value="ETEC CORONEL RAPHAEL BRANDÃO - BARRETOS - 108">BARRETOS</option>
                                <option value="ETEC DARCY PEREIRA DE MORAES - ITAPETININGA - 261">ITAPETININGA</option>
                                <option value="ETEC DE ARAÇATUBA - ARAÇATUBA - 165">ARAÇATUBA</option>
                                <option value="ETEC DE ARTES - SÃO PAULO - 180">SÃO PAULO</option>
                                <option value="ETEC DE BARUERI - BARUERI - 245">BARUERI</option>
                                <option value="ETEC DE CAIEIRAS - CAIEIRAS - 279">CAIEIRAS</option>
                                <option value="ETEC DE CAMPO LIMPO PAULISTA - CAMPO LIMPO PAULISTA - 201">CAMPO LIMPO PAULISTA</option>
                                <option value="ETEC DE CARAGUATATUBA - CARAGUATATUBA - 213">CARAGUATATUBA</option>
                                <option value="ETEC DE CARAPICUÍBA - CARAPICUÍBA - 144">CARAPICUÍBA</option>
                                <option value="ETEC DE CIDADE TIRADENTES - SÃO PAULO - 199">SÃO PAULO</option>
                                <option value="ETEC DE COTIA - COTIA - 222">COTIA</option>
                                <option value="ETEC DE CUBATÃO - CUBATÃO - 181">CUBATÃO</option>
                                <option value="ETEC DE EMBU - EMBU DAS ARTES - 241">EMBU DAS ARTES</option>
                                <option value="ETEC DE ESPORTES CURT WALTER OTTO BAUMGART - SÃO PAULO - 267">SÃO PAULO</option>
                                <option value="ETEC DE FERNANDÓPOLIS - FERNANDÓPOLIS - 138">FERNANDÓPOLIS</option>
                                <option value="ETEC DE FERRAZ DE VASCONCELOS - FERRAZ DE VASCONCELOS - 170"> FERRAZ DE VASCONCELOS</option>
                                <option value="ETEC DE FRANCISCO MORATO - FRANCISCO MORATO - 231">FRANCISCO MORATO</option>
                                <option value="ETEC DE GUAIANASES - SÃO PAULO - 118">SÃO PAULO</option>
                                <option value="ETEC DE GUARULHOS - GUARULHOS - 295">GUARULHOS</option>
                                <option value="ETEC DE HORTOLÂNDIA - HORTOLÂNDIA - 115">HORTOLÂNDIA</option>
                                <option value="ETEC DE ILHA SOLTEIRA - ILHA SOLTEIRA - 065">ILHA SOLTEIRA</option>
                                <option value="ETEC DE ITANHAÉM - ITANHAÉM - 158">ITANHAÉM</option>
                                <option value="ETEC DE ITAPEVI - ITAPEVI - 300">ITAPEVI</option>
                                <option value="ETEC DE ITAQUAQUECETUBA - ITAQUAQUECETUBA - 249">ITAQUAQUECETUBA</option>
                                <option value="ETEC DE ITAQUERA - SÃO PAULO - 169">SÃO PAULO</option>
                                <option value="ETEC DE ITARARÉ - ITARARÉ - 243">ITARARÉ</option>
                                <option value="ETEC DE LINS - LINS - 148">LINS</option>
                                <option value="ETEC DE MAUÁ - MAUÁ - 128">MAUÁ</option>
                                <option value="ETEC DE MONTE MOR - MONTE MOR - 198">MONTE MOR</option>
                                <option value="ETEC DE NOVA ODESSA - NOVA ODESSA - 234">NOVA ODESSA</option>
                                <option value="ETEC DE PERUÍBE - PERUÍBE - 266">PERUÍBE</option>
                                <option value="ETEC DE PIEDADE - PIEDADE - 203"> PIEDADE</option>
                                <option value="ETEC DE POÁ - POÁ - 210">POÁ</option>
                                <option value="ETEC DE PRAIA GRANDE - PRAIA GRANDE - 153">PRAIA GRANDE</option>
                                <option value="ETEC DE SANTA FÉ DO SUL - SANTA FÉ DO SUL - 277">SANTA FÉ DO SUL</option>
                                <option value="ETEC DE SANTA ISABEL - SANTA ISABEL - 219">SANTA ISABEL</option>
                                <option value="ETEC DE SANTA ROSA DE VITERBO - SANTA ROSA DE VITERBO - 237">SANTA ROSA DE VITERBO</option>
                                <option value="ETEC DE SÃO PAULO - SÃO PAULO - 018">SÃO PAULO</option>
                                <option value="ETEC DE SÃO ROQUE - SÃO ROQUE - 116">SÃO ROQUE</option>
                                <option value="ETEC DE SÃO SEBASTIÃO - SÃO SEBASTIÃO - 188">SÃO SEBASTIÃO</option>
                                <option value="ETEC DE SAPOPEMBA - SÃO PAULO - 172"> SÃO PAULO</option>
                                <option value="ETEC DE SUZANO - SUZANO - 190">SUZANO</option>
                                <option value="ETEC DE TIQUATIRA - SÃO PAULO - 208"> SÃO PAULO </option>
                                <option value="ETEC DE VARGEM GRANDE DO SUL - VARGEM GRANDE DO SUL - 179"> VARGEM GRANDE DO SUL</option>
                                <option value="ETEC DE VILA FORMOSA - SÃO PAULO - 185">SÃO PAULO </option>
                                <option value="ETEC DEPUTADO ARY DE CAMARGO PEDROSO - PIRACICABA - 193">PIRACICABA</option>
                                <option value="ETEC DEPUTADO FRANCISCO FRANCO - RANCHARIA - 058">RANCHARIA</option>
                                <option value="ETEC DEPUTADO PAULO ORNELLAS CARVALHO DE BARROS - GARÇA - 093">GARÇA</option>
                                <option value="ETEC DEPUTADO SALIM SEDEH - LEME - 110">LEME</option>
                                <option value="ETEC DONA ESCOLÁSTICA ROSA - SANTOS - 122">SANTOS</option>
                                <option value="ETEC DOUTOR ADAIL NUNES DA SILVA - TAQUARITINGA - 019">TAQUARITINGA</option>
                                <option value="ETEC DOUTOR CAROLINO DA MOTTA E SILVA - ESPÍRITO SANTO DO PINHAL - 047"> ESPÍRITO SANTO DO PINHAL</option>
                                <option value="ETEC DOUTOR CELSO GIGLIO - OSASCO - 242"> OSASCO </option>
                                <option value="ETEC DOUTOR DÁRIO PACHECO PEDROSO - TAQUARIVAÍ - 049">TAQUARIVAÍ</option>
                                <option value="ETEC DOUTOR DEMÉTRIO AZEVEDO JÚNIOR - ITAPEVA - 050">ITAPEVA </option>
                                <option value="ETEC DOUTOR EMILIO HERNANDEZ AGUILAR - FRANCO DA ROCHA - 142">FRANCO DA ROCHA</option>
                                <option value="ETEC DOUTOR FRANCISCO NOGUEIRA DE LIMA - CASA BRANCA - 059"> CASA BRANCA </option>
                                <option value="ETEC DOUTOR GERALDO JOSÉ RODRIGUES ALCKMIN - TAUBATÉ - 125">TAUBATÉ</option>
                                <option value="ETEC DOUTOR JOSÉ COURY - RIO DAS PEDRAS - 071">RIO DAS PEDRAS</option>
                                <option value="ETEC DOUTOR JOSÉ LUIZ VIANA COUTINHO - JALES - 073">JALES</option>
                                <option value="ETEC DOUTOR JÚLIO CARDOSO - FRANCA - 078">FRANCA</option>
                                <option value="ETEC DOUTOR LUIZ CESAR COUTO - QUATÁ - 080">QUATÁ</option>
                                <option value="ETEC DOUTOR RENATO CORDEIRO - BIRIGUI - 123">BIRIGUI</option>
                                <option value="ETEC DOUTORA MARIA AUGUSTA SARAIVA - SÃO PAULO - 154">SÃO PAULO</option>
                                <option value="ETEC DOUTORA RUTH CARDOSO - SÃO VICENTE - 194">SÃO VICENTE</option>
                                <option value="ETEC ELIAS NECHAR - CATANDUVA - 054"> CATANDUVA</option>
                                <option value="ETEC ENGENHEIRO HERVAL BELLUSCI - ADAMANTINA - 063">ADAMANTINA</option>
                                <option value="ETEC EURO ALBINO DE SOUZA - MOGI GUAÇU - 206"> MOGI GUAÇU</option>
                                <option value="ETEC FERNANDO PRESTES - SOROCABA - 016"> SOROCABA</option>
                                <option value="ETEC FRANCISCO GARCIA - MOCOCA - 060">MOCOCA</option>
                                <option value="ETEC FREI ARNALDO MARIA DE ITAPORANGA - VOTUPORANGA - 037"> VOTUPORANGA</option>
                                <option value="ETEC GETÚLIO VARGAS - SÃO PAULO - 013">SÃO PAULO</option>
                                <option value="ETEC GILDO MARÇAL BEZERRA BRANDÃO - SÃO PAULO - 226">SÃO PAULO</option>
                                <option value="ETEC GINO REZAGHI - CAJAMAR - 191"> CAJAMAR</option>
                                <option value="ETEC GUARACY SILVEIRA - SÃO PAULO - 061">SÃO PAULO </option>
                                <option value="ETEC GUSTAVO TEIXEIRA - SÃO PEDRO - 236">SÃO PEDRO</option>
                                <option value="ETEC IRMÃ AGOSTINA - SÃO PAULO - 238">SÃO PAULO</option>
                                <option value="ETEC ITAQUERA II - SÃO PAULO - 285"> SÃO PAULO </option>
                                <option value="ETEC JACINTO FERREIRA DE SÁ - OURINHOS - 066">OURINHOS</option>
                                <option value="ETEC JARAGUÁ - SÃO PAULO - 228">SÃO PAULO</option>
                                <option value="ETEC JARDIM ÂNGELA - SÃO PAULO - 221">SÃO PAULO</option>
                                <option value="ETEC JOÃO BAPTISTA DE LIMA FIGUEIREDO - MOCOCA - 009">MOCOCA</option>
                                <option value="ETEC JOÃO BELARMINO - AMPARO - 067">AMPARO</option>
                                <option value="ETEC JOÃO GOMES DE ARAÚJO - PINDAMONHANGABA - 068">PINDAMONHANGABA</option>
                                <option value="ETEC JOÃO JORGE GERAISSATE - PENÁPOLIS - 069"> PENÁPOLIS </option>
                                <option value="ETEC JOÃO MARIA STEVANATTO - ITAPIRA - 218">ITAPIRA</option>
                                <option value="ETEC JOAQUIM FERREIRA DO AMARAL - JAÚ - 070"> JAÚ</option>
                                <option value="ETEC JORGE STREET - SÃO CAETANO DO SUL - 011">SÃO CAETANO DO SUL</option>
                                <option value="ETEC JOSÉ MARTIMIANO DA SILVA - RIBEIRÃO PRETO - 074">RIBEIRÃO PRETO</option>
                                <option value="ETEC JOSÉ ROCHA MENDES - SÃO PAULO - 076">SÃO PAULO</option>
                                <option value="ETEC JÚLIO DE MESQUITA - SANTO ANDRÉ - 014"> SANTO ANDRÉ </option>
                                <option value="ETEC JUSCELINO KUBITSCHEK DE OLIVEIRA - DIADEMA - 166">DIADEMA</option>
                                <option value="ETEC LAURINDO ALVES DE QUEIROZ - MIGUELÓPOLIS - 079">MIGUELÓPOLIS</option>
                                <option value="ETEC LAURO GOMES - SÃO BERNARDO DO CAMPO - 010">SÃO BERNARDO DO CAMPO</option>
                                <option value="ETEC MACHADO DE ASSIS - CAÇAPAVA - 082"> CAÇAPAVA</option>
                                <option value="ETEC MANDAQUI - SÃO PAULO - 247">SÃO PAULO</option>
                                <option value="ETEC MANOEL DOS REIS ARAÚJO - SANTA RITA DO PASSA QUATRO - 083"> SANTA RITA DO PASSA QUATRO</option>
                                <option value="ETEC MARTINHO DI CIERO - ITU - 086">ITU</option>
                                <option value="ETEC MONSENHOR ANTÔNIO MAGLIANO - GARÇA - 088">GARÇA</option>
                                <option value="ETEC ORLANDO QUAGLIATO - SANTA CRUZ DO RIO PARDO - 084">SANTA CRUZ DO RIO PARDO</option>
                                <option value="ETEC PADRE CARLOS LEÔNCIO DA SILVA - LORENA - 240">LORENA</option>
                                <option value="ETEC PADRE JOSÉ NUNES DIAS - MONTE APRAZÍVEL - 075">MONTE APRAZÍVEL</option>
                                <option value="ETEC PARQUE BELÉM - SÃO PAULO - 220"> SÃO PAULO </option>
                                <option value="ETEC PARQUE DA JUVENTUDE - SÃO PAULO - 159">SÃO PAULO</option>
                                <option value="ETEC PAULINO BOTELHO - SÃO CARLOS - 091"> SÃO CARLOS</option>
                                <option value="ETEC PAULISTANO - SÃO PAULO - 229">SÃO PAULO </option>
                                <option value="ETEC PAULO GUERREIRO FRANCO - VERA CRUZ - 092">VERA CRUZ</option>
                                <option value="ETEC PEDRO BADRAN - SÃO JOAQUIM DA BARRA - 094">SÃO JOAQUIM DA BARRA</option>
                                <option value="ETEC PEDRO D'ARCÁDIA NETO - ASSIS - 095">ASSIS</option>
                                <option value="ETEC PEDRO FERREIRA ALVES - MOGI MIRIM - 096"> MOGI MIRIM</option>
                                <option value="ETEC PHILADELPHO GOUVEA NETTO - SÃO JOSÉ DO RIO PRETO - 098"> SÃO JOSÉ DO RIO PRETO</option>
                                <option value="ETEC POLIVALENTE DE AMERICANA - AMERICANA - 006"> AMERICANA </option>
                                <option value="ETEC PREFEITO ALBERTO FERES - ARARAS - 024">ARARAS</option>
                                <option value="ETEC PREFEITO BRAZ PASCHOALIN - JANDIRA - 268">JANDIRA</option>
                                <option value="ETEC PRESIDENTE VARGAS - MOGI DAS CRUZES - 015">MOGI DAS CRUZES</option>
                                <option value="ETEC PROFESSOR ADHEMAR BATISTA HEMÉRITAS - SÃO PAULO - 207">SÃO PAULO</option>
                                <option value="ETEC PROFESSOR ADOLPHO ARRUDA MELLO - PRESIDENTE PRUDENTE - 252">PRESIDENTE PRUDENTE</option>
                                <option value="ETEC PROFESSOR ALCÍDIO DE SOUZA PRADO - ORLÂNDIA - 025">ORLÂNDIA</option>
                                <option value="ETEC PROFESSOR ALFREDO DE BARROS SANTOS - GUARATINGUETÁ - 026"> GUARATINGUETÁ</option>
                                <option value="ETEC PROFESSOR ANDRÉ BOGASIAN - OSASCO - 149">OSASCO</option>
                                <option value="ETEC PROFESSOR APRÍGIO GONZAGA - SÃO PAULO - 034">SÃO PAULO</option>
                                <option value="ETEC PROFESSOR ARMANDO BAYEUX DA SILVA - RIO CLARO - 036">RIO CLARO </option>
                                <option value="ETEC PROFESSOR BASÍLIDES DE GODOY - SÃO PAULO - 041"> SÃO PAULO </option>
                                <option value="ETEC PROFESSOR CAMARGO ARANHA - SÃO PAULO - 012"> SÃO PAULO</option>
                                <option value="ETEC PROFESSOR CARMELINO CORREA JÚNIOR - FRANCA - 046">FRANCA</option>
                                <option value="ETEC PROFESSOR CARMINE BIAGIO TUNDISI - ATIBAIA - 147">ATIBAIA</option>
                                <option value="ETEC PROFESSOR DOUTOR ANTONIO EUFRÁSIO TOLEDO - PRESIDENTE PRUDENTE - 032">PRESIDENTE PRUDENTE</option>
                                <option value="ETEC PROFESSOR DOUTOR JOSÉ DAGNONI - SANTA BÁRBARA D'OESTE - 117">SANTA BÁRBARA D'OESTE</option>
                                <option value="ETEC PROFESSOR EUDÉCIO LUIZ VICENTE - ADAMANTINA - 055">ADAMANTINA </option>
                                <option value="ETEC PROFESSOR FRANCISCO DOS SANTOS - SÃO SIMÃO - 057">SÃO SIMÃO </option>
                                <option value="ETEC PROFESSOR HORÁCIO AUGUSTO DA SILVEIRA - SÃO PAULO - 064"> SÃO PAULO</option>
                                <option value="ETEC PROFESSOR ÍDIO ZUCCHI - BEBEDOURO - 151"> BEBEDOURO</option>
                                <option value="ETEC PROFESSOR JADYR SALLES - PORTO FERREIRA - 202">PORTO FERREIRA</option>
                                <option value="ETEC PROFESSOR JOSÉ CARLOS SENO JUNIOR - OLÍMPIA - 232">OLÍMPIA</option>
                                <option value="ETEC PROFESSOR JOSÉ IGNÁCIO AZEVEDO FILHO - ITUVERAVA - 233"> ITUVERAVA</option>
                                <option value="ETEC PROFESSOR JOSÉ SANT' ANA DE CASTRO - CRUZEIRO - 077">CRUZEIRO </option>
                                <option value="ETEC PROFESSOR LUIZ PIRES BARBOSA - CÂNDIDO MOTA - 081"> CÂNDIDO MOTA</option>
                                <option value="ETEC PROFESSOR MARCOS UCHÔAS DOS SANTOS PENCHEL - CACHOEIRA PAULISTA - 044">CACHOEIRA PAULISTA</option>
                                <option value="ETEC PROFESSOR MÁRIO ANTÔNIO VERZA - PALMITAL - 164">PALMITAL</option>
                                <option value="ETEC PROFESSOR MASSUYUKI KAWANO - TUPÃ - 136">TUPÃ</option>
                                <option value="ETEC PROFESSOR MATHEUS LEITE DE ABREU - MIRASSOL - 087"> MIRASSOL</option>
                                <option value="ETEC PROFESSOR MILTON GAZZETTI - PRESIDENTE VENCESLAU - 099">PRESIDENTE VENCESLAU</option>
                                <option value="ETEC PROFESSOR PEDRO LEME BRISOLLA SOBRINHO - IPAUSSU - 097">IPAUSSU</option>
                                <option value="ETEC PROFESSOR RODOLPHO JOSÉ DEL GUERRA - SÃO JOSÉ DO RIO PARDO - 150"> SÃO JOSÉ DO RIO PARDO</option>
                                <option value="ETEC PROFESSOR URIAS FERREIRA - JAÚ - 090"> JAÚ </option>
                                <option value="ETEC PROFESSORA ANNA DE OLIVEIRA FERRAZ - ARARAQUARA - 029"> ARARAQUARA </option>
                                <option value="ETEC PROFESSORA CARMELINA BARBOSA - DRACENA - 052"> DRACENA </option>
                                <option value="ETEC PROFESSORA DOUTORA DOROTI QUIOMI KANASHIRO TOYOHARA - SÃO PAULO - 254"> SÃO PAULO</option>
                                <option value="ETEC PROFESSORA ERMELINDA GIANNINI TEIXEIRA - SANTANA DE PARNAÍBA - 187">SANTANA DE PARNAÍBs/option>
                                <option value="ETEC PROFESSORA HELCY MOREIRA MARTINS AGUIAR - CAFELÂNDIA - 062">CAFELÂNDIA</option>
                                <option value="ETEC PROFESSORA ILZA NASCIMENTO PINTUS - SÃO JOSÉ DOS CAMPOS - 195"> SÃO JOSÉ DOS CAMPOS </option>
                                <option value="ETEC PROFESSORA LUZIA MARIA MACHADO - ARUJÁ - 274">ARUJÁ </option>
                                <option value="ETEC PROFESSORA MARIA CRISTINA MEDEIROS - RIBEIRÃO PIRES - 141">RIBEIRÃO PIRES</option>
                                <option value="ETEC PROFESSORA MARINÊS TEODORO DE FREITAS ALMEIDA - NOVO HORIZONTE - 212">NOVO HORIZONTE </option>
                                <option value="ETEC PROFESSORA NAIR LUCCAS RIBEIRO - TEODORO SAMPAIO - 156"> TEODORO SAMPAIO </option>
                                <option value="ETEC RAPOSO TAVARES - SÃO PAULO - 225"> SÃO PAULO </option>
                                <option value="ETEC RIO GRANDE DA SERRA - RIO GRANDE DA SERRA - 282"> RIO GRANDE DA SERRA </option>
                                <option value="ETEC ROSA PERRONE SCAVONE - ITATIBA - 100"> ITATIBA</option>
                                <option value="ETEC RUBENS DE FARIA E SOUZA - SOROCABA - 017">SOROCABA </option>
                                <option value="ETEC SANTA CRUZ DAS PALMEIRAS - SANTA CRUZ DAS PALMEIRAS - 287">SANTA CRUZ DAS PALMEIRAS</option>
                                <option value="ETEC SANTA IFIGÊNIA - SÃO PAULO - 260"> SÃO PAULO </option>
                                <option value="ETEC SÃO MATEUS - SÃO PAULO - 227"> SÃO PAULO</option>
                                <option value="ETEC SEBASTIANA AUGUSTA DE MORAES - ANDRADINA - 028">ANDRADINA</option>
                                <option value="ETEC SYLVIO DE MATTOS CARVALHO - MATÃO - 103"> MATÃO</option>
                                <option value="ETEC TAKASHI MORITA - SÃO PAULO - 200">SÃO PAULO</option>
                                <option value="ETEC TENENTE AVIADOR GUSTAVO KLUG - PIRASSUNUNGA - 139"> PIRASSUNUNGA</option>
                                <option value="ETEC TEREZA APARECIDA CARDOSO NUNES DE OLIVEIRA - SÃO PAULO - 186">SÃO PAULO</option>
                                <option value="ETEC TRAJANO CAMARGO - LIMEIRA - 104">LIMEIRA </option>
                                <option value="ETEC UIRAPURU - SÃO PAULO - 230">SÃO PAULO </option>
                                <option value="ETEC VASCO ANTONIO VENCHIARUTTI - JUNDIAÍ - 008"> JUNDIAÍ</option>
                                <option value="ETEC VEREADOR E VICE-PREFEITO SÉRGIO DA FONSECA - IBITINGA - 161">IBITINGA</option>
                                <option value="ETEC ZONA LESTE - SÃO PAULO - 211">SÃO PAULO </option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="codigo-etec">CODIGO : </label>
                            <select name="codigo">
                                <option>224</option>
                                <option>107</option>
                                <option>023</option>
                                <option>152</option>
                                <option>255</option>
                                <option>027</option>
                                <option>214</option>
                                <option>030</option>
                                <option>031</option>
                                <option>033</option>
                                <option>035</option>
                                <option>215</option>
                                <option>038</option>
                                <option>039</option>
                                <option>262</option>
                                <option>042</option>
                                <option>256</option>
                                <option>043</option>
                                <option>045</option>
                                <option>134</option>
                                <option>223</option>
                                <option>048</option>
                                <option>007</option>
                                <option>056</option>
                                <option>108</option>
                                <option>261</option>
                                <option>165</option>
                                <option>180</option>
                                <option>245</option>
                                <option>279</option>
                                <option>201</option>
                                <option>213</option>
                                <option>144</option>
                                <option>199</option>
                                <option>222</option>
                                <option>181</option>
                                <option>241</option>
                                <option>267</option>
                                <option>138</option>
                                <option>170</option>
                                <option>231</option>
                                <option>118</option>
                                <option>295</option>
                                <option>115</option>
                                <option>065</option>
                                <option>158</option>
                                <option>300</option>
                                <option>249</option>
                                <option>169</option>
                                <option>243</option>
                                <option>148</option>
                                <option>128</option>
                                <option>198</option>
                                <option>234</option>
                                <option>266</option>
                                <option>203</option>
                                <option>210</option>
                                <option>153</option>
                                <option>277</option>
                                <option>219</option>
                                <option>237</option>
                                <option>018</option>
                                <option>116</option>
                                <option>188</option>
                                <option>172</option>
                                <option>190</option>
                                <option>208</option>
                                <option>179</option>
                                <option>185</option>
                                <option>193</option>
                                <option>058</option>
                                <option>093</option>
                                <option>110</option>
                                <option>122</option>
                                <option>019</option>
                                <option>047</option>
                                <option>242</option>
                                <option>049</option>
                                <option>050</option>
                                <option>142</option>
                                <option>059</option>
                                <option>125</option>
                                <option>071</option>
                                <option>073</option>
                                <option>078</option>
                                <option>080</option>
                                <option>123</option>
                                <option>154</option>
                                <option>194</option>
                                <option>054</option>
                                <option>063</option>
                                <option>206</option>
                                <option>016</option>
                                <option>060</option>
                                <option>037</option>
                                <option>013</option>
                                <option>226</option>
                                <option>191</option>
                                <option>061</option>
                                <option>236</option>
                                <option>238</option>
                                <option>285</option>
                                <option>066</option>
                                <option>228</option>
                                <option>221</option>
                                <option>009</option>
                                <option>067</option>
                                <option>068</option>
                                <option>069</option>
                                <option>218</option>
                                <option>070</option>
                                <option>011</option>
                                <option>074</option>
                                <option>076</option>
                                <option>014</option>
                                <option>166</option>
                                <option>079</option>
                                <option>010</option>
                                <option>082</option>
                                <option>247</option>
                                <option>083</option>
                                <option>086</option>
                                <option>088</option>
                                <option>084</option>
                                <option>240</option>
                                <option>075</option>
                                <option>220</option>
                                <option>159</option>
                                <option>091</option>
                                <option>229</option>
                                <option>092</option>
                                <option>094</option>
                                <option>095</option>
                                <option>096</option>
                                <option>098</option>
                                <option>006</option>
                                <option>024</option>
                                <option>268</option>
                                <option>015</option>
                                <option>207</option>
                                <option>252</option>
                                <option>025</option>
                                <option>026</option>
                                <option>149</option>
                                <option>034</option>
                                <option>036</option>
                                <option>041</option>
                                <option>012</option>
                                <option>046</option>
                                <option>147</option>
                                <option>032</option>
                                <option>117</option>
                                <option>055</option>
                                <option>057</option>
                                <option>064</option>
                                <option>151</option>
                                <option>202</option>
                                <option>232</option>
                                <option>233</option>
                                <option>077</option>
                                <option>081</option>
                                <option>044</option>
                                <option>164</option>
                                <option>136</option>
                                <option>087</option>
                                <option>099</option>
                                <option>097</option>
                                <option>150</option>
                                <option>090</option>
                                <option>029</option>
                                <option>052</option>
                                <option>254</option>
                                <option>187</option>
                                <option>062</option>
                                <option>195</option>
                                <option>274</option>
                                <option>141</option>
                                <option>212</option>
                                <option>156</option>
                                <option>225</option>
                                <option>282</option>
                                <option>282</option>
                                <option>100</option>
                                <option>017</option>
                                <option>287</option>
                                <option>260</option>
                                <option>227</option>
                                <option>028</option>
                                <option>103</option>
                                <option>200</option>
                                <option>139</option>
                                <option>186</option>
                                <option>104</option>
                                <option>230</option>
                                <option>008</option>
                                <option>161</option>
                                <option>211</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="nome-etec"> QUAL SUA INSTITUIÇÃO ? </label>
                            <select id="nome-etec" name="nome-etec" placeholder="Nome da Instituição">
                                <option>ETEC ABDIAS DO NASCIMENTO</option>
                                <option>ETEC ADOLPHO BEREZIN</option>
                                <option>ETEC ALBERT EINSTEIN</option>
                                <option>ETEC ALBERTO SANTOS DUMONT</option>
                                <option>ETEC ALCIDES CESTARI</option>
                                <option>ETEC AMIM JUNDI</option>
                                <option>ETEC ÂNGELO CAVALHEIRO</option>
                                <option>ETEC ANTONIO DE PÁDUA CARDOSO</option>
                                <option>ETEC ANTONIO DEVISATE</option>
                                <option>ETEC ANTONIO JUNQUEIRA DA VEIGA</option>
                                <option>ETEC ARISTÓTELES FERREIRA</option>
                                <option>ETEC ARNALDO PEREIRA CHEREGATTI</option>
                                <option>ETEC ASTOR DE MATTOS CARVALHO</option>
                                <option>ETEC AUGUSTO TORTOLERO ARAÚJO</option>
                                <option>ETEC BARTOLOMEU BUENO DA SILVA</option>
                                <option>ETEC BENEDITO STORANI</option>
                                <option>ETEC BENTO CARLOS BOTELHO DO AMARAL</option>
                                <option>ETEC BENTO QUIRINO</option>
                                <option>ETEC CARLOS DE CAMPOS</option>
                                <option>ETEC CAROLINA CARINHATO SAMPAIO</option>
                                <option>ETEC CEPAM</option>
                                <option>ETEC CÔNEGO JOSÉ BENTO</option>
                                <option>ETEC CONSELHEIRO ANTONIO PRADO</option>
                                <option>ETEC CORONEL FERNANDO FEBELIANO DA COSTA</option>
                                <option>ETEC CORONEL RAPHAEL BRANDÃO</option>
                                <option>ETEC DARCY PEREIRA DE MORAES</option>
                                <option>ETEC DE ARAÇATUBA</option>
                                <option>ETEC DE ARTES</option>
                                <option>ETEC DE BARUERI</option>
                                <option>ETEC DE CAIEIRAS</option>
                                <option>ETEC DE CAMPO LIMPO PAULISTA</option>
                                <option>ETEC DE CARAGUATATUBA</option>
                                <option>ETEC DE CARAPICUÍBA</option>
                                <option>ETEC DE CIDADE TIRADENTES</option>
                                <option>ETEC DE COTIA</option>
                                <option>ETEC DE CUBATÃO</option>
                                <option>ETEC DE EMBU</option>
                                <option>ETEC DE ESPORTES CURT WALTER OTTO BAUMGART</option>
                                <option>ETEC DE FERNANDÓPOLIS</option>
                                <option>ETEC DE FERRAZ DE VASCONCELOS</option>
                                <option>ETEC DE FRANCISCO MORATO</option>
                                <option>ETEC DE GUAIANASES</option>
                                <option>ETEC DE GUARULHOS</option>
                                <option>ETEC DE HORTOLÂNDIA</option>
                                <option>ETEC DE ILHA SOLTEIRA</option>
                                <option>ETEC DE ITANHAÉM</option>
                                <option>ETEC DE ITAPEVI</option>
                                <option>ETEC DE ITAQUAQUECETUBA</option>
                                <option>ETEC DE ITAQUERA</option>
                                <option>ETEC DE ITARARÉ</option>
                                <option>ETEC DE LINS</option>
                                <option>ETEC DE MAUÁ</option>
                                <option>ETEC DE MONTE MOR</option>
                                <option>ETEC DE NOVA ODESSA</option>
                                <option>ETEC DE PERUÍBE</option>
                                <option>ETEC DE PIEDADE</option>
                                <option>ETEC DE POÁ</option>
                                <option>ETEC DE PRAIA GRANDE</option>
                                <option>ETEC DE SANTA FÉ DO SUL</option>
                                <option>ETEC DE SANTA ISABEL</option>
                                <option>ETEC DE SANTA ROSA DE VITERBO</option>
                                <option>ETEC DE SÃO PAULO</option>
                                <option>ETEC DE SÃO ROQUE</option>
                                <option>ETEC DE SÃO SEBASTIÃO</option>
                                <option>ETEC DE SAPOPEMBA</option>
                                <option>ETEC DE SUZANO</option>
                                <option>ETEC DE TIQUATIRA</option>
                                <option>ETEC DE VARGEM GRANDE DO SUL</option>
                                <option>ETEC DE VILA FORMOSA</option>
                                <option>ETEC DEPUTADO ARY DE CAMARGO PEDROSO</option>
                                <option>ETEC DEPUTADO FRANCISCO FRANCO</option>
                                <option>ETEC DEPUTADO PAULO ORNELLAS CARVALHO DE BARROS 3</option>
                                <option>ETEC DEPUTADO SALIM SEDEH</option>
                                <option>ETEC DONA ESCOLÁSTICA ROSA</option>
                                <option>TEC DOUTOR ADAIL NUNES DA SILVA</option>
                                <option>TEC DOUTOR CAROLINO DA MOTTA E SILVA</option>
                                <option>ETEC DOUTOR CELSO GIGLIO</option>
                                <option>ETEC DOUTOR DÁRIO PACHECO PEDROSO</option>
                                <option>ETEC DOUTOR DEMÉTRIO AZEVEDO JÚNIOR</option>
                                <option>ETEC DOUTOR EMILIO HERNANDEZ AGUILAR</option>
                                <option>ETEC DOUTOR FRANCISCO NOGUEIRA DE LIMA</option>
                                <option>ETEC DOUTOR GERALDO JOSÉ RODRIGUES ALCKMIN</option>
                                <option>ETEC DOUTOR JOSÉ COURY</option>
                                <option>ETEC DOUTOR JOSÉ LUIZ VIANA COUTINHO</option>
                                <option>ETEC DOUTOR JÚLIO CARDOSO</option>
                                <option>ETEC DOUTOR LUIZ CESAR COUTO</option>
                                <option>ETEC DOUTOR RENATO CORDEIRO</option>
                                <option>ETEC DOUTORA MARIA AUGUSTA SARAIVA</option>
                                <option>ETEC DOUTORA RUTH CARDOSO</option>
                                <option>ETEC ELIAS NECHAR</option>
                                <option>ETEC ENGENHEIRO HERVAL BELLUSCI</option>
                                <option>ETEC EURO ALBINO DE SOUZA</option>
                                <option>ETEC FERNANDO PRESTES</option>
                                <option>ETEC FRANCISCO GARCIA</option>
                                <option>ETEC FREI ARNALDO MARIA DE ITAPORANGA</option>
                                <option>ETEC GETÚLIO VARGAS</option>
                                <option>ETEC GILDO MARÇAL BEZERRA BRANDÃO</option>
                                <option>ETEC GINO REZAGHI</option>
                                <option>ETEC GUARACY SILVEIRA</option>
                                <option>ETEC GUSTAVO TEIXEIRA</option>
                                <option>ETEC IRMÃ AGOSTINA</option>
                                <option>ETEC ITAQUERA II</option>
                                <option>ETEC JACINTO FERREIRA DE SÁ</option>
                                <option>ETEC JARAGUÁ</option>
                                <option>ETEC JARDIM ÂNGELA</option>
                                <option>ETEC JOÃO BAPTISTA DE LIMA FIGUEIREDO</option>
                                <option>ETEC JOÃO BELARMINO</option>
                                <option>ETEC JOÃO GOMES DE ARAÚJO</option>
                                <option>ETEC JOÃO JORGE GERAISSATE</option>
                                <option>ETEC JOÃO MARIA STEVANATTO</option>
                                <option>ETEC JOAQUIM FERREIRA DO AMARAL</option>
                                <option>ETEC JORGE STREET</option>
                                <option>ETEC JOSÉ MARTIMIANO DA SILVA</option>
                                <option>ETEC JOSÉ ROCHA MENDES</option>
                                <option>ETEC JÚLIO DE MESQUITA</option>
                                <option>ETEC JUSCELINO KUBITSCHEK DE OLIVEIRA</option>
                                <option>ETEC LAURINDO ALVES DE QUEIROZ</option>
                                <option>ETEC LAURO GOMES</option>
                                <option>ETEC MACHADO DE ASSIS</option>
                                <option>ETEC MANDAQUI</option>
                                <option>ETEC MANOEL DOS REIS ARAÚJO</option>
                                <option>ETEC MARTINHO DI CIERO</option>
                                <option>ETEC MONSENHOR ANTÔNIO MAGLIANO</option>
                                <option>ETEC ORLANDO QUAGLIATO</option>
                                <option>ETEC PADRE CARLOS LEÔNCIO DA SILVA</option>
                                <option>ETEC PADRE JOSÉ NUNES DIAS</option>
                                <option>ETEC PARQUE BELÉM</option>
                                <option>ETEC PARQUE DA JUVENTUDE</option>
                                <option>ETEC PAULINO BOTELHO</option>
                                <option>ETEC PAULISTANO</option>
                                <option>ETEC PAULO GUERREIRO FRANCO</option>
                                <option>ETEC PEDRO BADRAN</option>
                                <option>ETEC PEDRO D'ARCÁDIA NETO</option>
                                <option>ETEC PEDRO FERREIRA ALVES</option>
                                <option>ETEC PHILADELPHO GOUVEA NETTO</option>
                                <option>ETEC POLIVALENTE DE AMERICANA</option>
                                <option>ETEC PREFEITO ALBERTO FERES</option>
                                <option>ETEC PREFEITO BRAZ PASCHOALIN</option>
                                <option>ETEC PRESIDENTE VARGAS</option>
                                <option>ETEC PROFESSOR ADHEMAR BATISTA HEMÉRITAS</option>
                                <option>ETEC PROFESSOR ADOLPHO ARRUDA MELLO</option>
                                <option>ETEC PROFESSOR ALCÍDIO DE SOUZA PRADO</option>
                                <option>ETEC PROFESSOR ALFREDO DE BARROS SANTOS</option>
                                <option>ETEC PROFESSOR ANDRÉ BOGASIAN</option>
                                <option>ETEC PROFESSOR APRÍGIO GONZAGA</option>
                                <option>ETEC PROFESSOR ARMANDO BAYEUX DA SILVA</option>
                                <option>ETEC PROFESSOR BASÍLIDES DE GODOY</option>
                                <option>ETEC PROFESSOR CAMARGO ARANHA</option>
                                <option>ETEC PROFESSOR CARMELINO CORREA JÚNIOR</option>
                                <option>ETEC PROFESSOR CARMINE BIAGIO TUNDISI</option>
                                <option>ETEC PROFESSOR DOUTOR ANTONIO EUFRÁSIO TOLEDO</option>
                                <option>ETEC PROFESSOR DOUTOR JOSÉ DAGNONI</option>
                                <option>ETEC PROFESSOR EUDÉCIO LUIZ VICENTE</option>
                                <option>ETEC PROFESSOR FRANCISCO DOS SANTOS</option>
                                <option>ETEC PROFESSOR HORÁCIO AUGUSTO DA SILVEIRA</option>
                                <option>ETEC PROFESSOR ÍDIO ZUCCHI</option>
                                <option>ETEC PROFESSOR JADYR SALLES</option>
                                <option>ETEC PROFESSOR JOSÉ CARLOS SENO JUNIOR</option>
                                <option>ETEC PROFESSOR JOSÉ IGNÁCIO AZEVEDO FILHO</option>
                                <option>ETEC PROFESSOR JOSÉ SANT' ANA DE CASTRO</option>
                                <option>ETEC PROFESSOR LUIZ PIRES BARBOSA</option>
                                <option>ETEC PROFESSOR MARCOS UCHÔAS DOS SANTOS PENCHEL</option>
                                <option>ETEC PROFESSOR MÁRIO ANTÔNIO VERZA</option>
                                <option>ETEC PROFESSOR MASSUYUKI KAWANO</option>
                                <option>ETEC PROFESSOR MATHEUS LEITE DE ABREU</option>
                                <option>ETEC PROFESSOR MILTON GAZZETTI</option>
                                <option>ETEC PROFESSOR PEDRO LEME BRISOLLA SOBRINHO</option>
                                <option>ETEC PROFESSOR RODOLPHO JOSÉ DEL GUERRA</option>
                                <option>ETEC PROFESSOR URIAS FERREIRA</option>
                                <option>ETEC PROFESSORA ANNA DE OLIVEIRA FERRAZ</option>
                                <option>ETEC PROFESSORA CARMELINA BARBOSA</option>
                                <option>ETEC PROFESSORA DOUTORA DOROTI QUIOMI KANASHIRO TOYOHARA</option>
                                <option>ETEC PROFESSORA ERMELINDA GIANNINI TEIXEIRA</option>
                                <option>ETEC PROFESSORA HELCY MOREIRA MARTINS AGUIAR</option>
                                <option>ETEC PROFESSORA ILZA NASCIMENTO PINTUS</option>
                                <option>ETEC PROFESSORA LUZIA MARIA MACHADO</option>
                                <option>ETEC PROFESSORA MARIA CRISTINA MEDEIROS</option>
                                <option>ETEC PROFESSORA MARINÊS TEODORO DE FREITAS ALMEIDA</option>
                                <option>ETEC PROFESSORA NAIR LUCCAS RIBEIRO</option>
                                <option>ETEC RAPOSO TAVARES</option>
                                <option>ETEC RIO GRANDE DA SERRA</option>
                                <option>ETEC ROSA PERRONE SCAVONE</option>
                                <option>ETEC RUBENS DE FARIA E SOUZA</option>
                                <option>ETEC SANTA CRUZ DAS PALMEIRAS</option>
                                <option>ETEC SANTA IFIGÊNIA</option>
                                <option>ETEC SÃO MATEUS</option>
                                <option>ETEC SEBASTIANA AUGUSTA DE MORAES</option>
                                <option>ETEC SYLVIO DE MATTOS CARVALHO</option>
                                <option>ETEC TAKASHI MORITA</option>
                                <option>ETEC TENENTE AVIADOR GUSTAVO KLUG</option>
                                <option>ETEC TEREZA APARECIDA CARDOSO NUNES DE OLIVEIRA</option>
                                <option>ETEC TRAJANO CAMARGO</option>
                                <option>ETEC UIRAPURU</option>
                                <option>ETEC VASCO ANTONIO VENCHIARUTTI</option>
                                <option>ETEC VEREADOR E VICE-PREFEITO SÉRGIO DA FONSECA</option>
                                <option>ETEC ZONA LESTE</option>
                            </select>
                      
                        </div>
                    </div>


                    <div class="item-form">
                        <label for="email-etec">EMAIL </label>
                        <div class="div-input">
                            <input type="email" name="email-etec" id="email-etec" required>
                        </div>
                  

                    <div class="item-form">
                        <label for="senha-etec">SENHA</label>
                        <div class="div-input">
                            <input maxlength="8" type="password" name="senha-etec" id="senha-etec" required>
                            <i class="fa-solid fa-eye" style="color: #1f3251;"></i>
                        </div>
                    </div>


                    <div class="item-form">
                        <label for="telefone">TELEFONE</label>
                        <div class="div-input">
                            <input maxlength="11" type="numeric" placeholder="(11) 9 5828-1911" name="telefone" required>
                        </div>
                    </div>
                    <input class="botao" type="submit" value="Cadastrar">


                </form>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>