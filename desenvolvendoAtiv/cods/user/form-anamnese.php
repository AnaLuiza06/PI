
<div class="form-anamnese">
    <form method="post" action="../conexao/inserts/ianamnese.php?cd=<?php echo $_SESSION['ID'];?>">
        <h1>Anamnese</h1>
                <div class="perguntas-anamnese">
                    <p>Você fuma?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="fumante" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="fumante" value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Como está a pressão alta?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="pressao" value="alta">
                                Pressão Alta
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="pressao"value="baixa">
                                Pressão Baixa
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="pressao"value="normal">
                                Normal</label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Possuí diabéticos na família?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="diabetes" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="diabetes"value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Possuí algum problema cardíaco?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="problemas-cardiacos" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="problemas-cardiacos"value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Possuí alguma lesão ou problema ortopédico?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="lesao" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="lesao"value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Pratica alguma atividade física regularmente?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="praticaatividade" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="praticaatividade"value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="perguntas-anamnese">
                    <p>Sente dores no peito ao praticar alguma atividade?</p>
                    <div class="inputs-anamnese">
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="dornopeito" value="sim">
                                Sim
                            </label>
                        </div>
                        <div class="input-anamnese">
                            <label>
                                <input type="radio" name="dornopeito"value="nao">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
        <div class="btn-anamnese">
            <button onclick="tirarForm()">Enviar</button>
        </div>
    </form>
</div>