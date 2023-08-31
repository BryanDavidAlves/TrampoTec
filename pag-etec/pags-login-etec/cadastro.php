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
                        <label for="nome-etec">NOME</label>
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome-etec"><small> Qual instituição você estuda?</small></label>
                                        <select class="form-control obrigatorio" id="nome-etec" name="nome-etec" placeholder="Nome da Instituição">
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
                                        <div class="invalid-feedback">
                                           Informe a data de nascimento
                                        </div>
                                    </div>
                                
                    </div>
                    <div class="item-form">
                        <label for="email-etec">EMAIL </label>
                        <div class="div-input">
                            <input type="email" name="email-etec" id="email-etec">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="codigo-etec">CODIGO</label>
                        <label for="codigo-etec">CODIGO</label>
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

                    <div class="item-form">
                        <label for="municipio-etec">MUNICIPIO</label>
                        <select name="municipio">
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

                    <div class="item-form">
                        <label for="senha-etec">SENHA</label>
                        <div class="div-input">
                            <input type="password" name="senha-etec" id="senha-etec">
                            <i class="fa-solid fa-eye" style="color: #1f3251;"></i>
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