
</section>
<form action="/InLettersReg/" method="POST" enctype="multipart/form-data">
    <div class="panel-heading">
        <div class="box-header">
            <legend><h3 class="box-title">Карточка регистрации входящих писем</h3></legend>
            <?php
                if ($_POST['WrongNum']==1){
            ?>
            <legend><h4 style="color:red;">Письмо с данным входящим номером в базе существует. Проверте реквизиты.</h4></legend>
            <?php
                }
            ?>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Исходящий номер организации</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="OrgOutNum" value='<?=$_POST['OrgOutNum']?>' placeholder="" required>
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="OrgOutDate" value='<?=$_POST['OrgOutDate']?>' placeholder="" required>
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Входящий номер МТС</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="InNum" value='<?=$_POST['InNum']?>' OrgOutDate placeholder="" required>
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="Indate" value='<?=$_POST['Indate']?>' placeholder="" required>
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ответ на запрос МТС</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Номер</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">

                                    </div>

                                    <input type="text" class="form-control" name="OutNum" value='<?=$_POST['OutNum']?>' placeholder="">
                                </div>
                            </div>

                            <label class="col-md-2 control-label">Дата</label>
                            <div class="col-md-10">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="Outdate" value='<?=$_POST['Outdate']?>' placeholder="">
                                </div>

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>

        </div>

        <div class="form-group">

            <label class="col-md-2 control-label">Организация</label>

            <div class="col-md-10">
                <div class="input-group">
                    <div class="input-group-addon">
                    </div>

                    <div class="form-group">
                        <input list="Organisation" class="form-control" name="Organization" value='<?=$_POST['Organization']?>' required>
                        <datalist id="Organisation">
                            <?php
                            foreach ($_SESSION ['organization'] as $temp){
                            ?>
                                <option value='<?=$temp?>'>
                            <?php
                            }
                            ?>
                        </datalist>
                    </div>
                </div>
            </div>

            <label class="col-md-2 control-label">Тема письма</label>
            <div class="col-md-10">

                <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <textarea rows="2" class="form-control" name="Tema" required><?=$_POST['Tema']?></textarea>
                </div>

            </div>

            <label class="col-md-2 control-label">Сканированный образ письма</label>
            <div class="col-md-10">

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class=""></i>
                    </div>
                    <input type="file" class="form-control" name="file[]" placeholder="" required>
                </div>

            </div>
        </div><!-- /.form group -->
        <?php
            print_r($_FILES);
        ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Поручение</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <!-- checkbox -->
                            <div class="col-sm-3">

                                <div>
                                    <?php
                                    if($_POST['Resolution1']=="Yes"){
                                        $checked="checked";
                                    }else{
                                        $checked="";
                                    }
                                    ?>
                                    <input type="checkbox" id="Id1" name="Resolution1" <?=$checked?> value="Yes">
                                    <label for="Id1">Для информации</label>
                                </div>
                                <div>
                                    <?php
                                    if($_POST['Resolution2']=="Yes"){
                                        $checked="checked";
                                    }else{
                                        $checked="";
                                    }
                                    ?>
                                    <input type="checkbox" id="Id2" name="Resolution2" <?=$checked?> value="Yes">
                                    <label for="Id2">Для рассмотрения</label>
                                </div>
                                <div>
                                    <?php
                                    if($_POST['Resolution3']=="Yes"){
                                        $checked="checked";
                                    }else{
                                        $checked="";
                                    }
                                    ?>
                                    <input type="checkbox" id="Id3" name="Resolution3" <?=$checked?> value="Yes">
                                    <label for="Id3">Для предложений</label>
                                </div>
                                <div>
                                    <?php
                                    if($_POST['Resolution4']=="Yes"){
                                        $checked="checked";
                                    }else{
                                        $checked="";
                                    }
                                    ?>
                                    <input type="checkbox" id="Id4" name="Resolution4" <?=$checked?> value="Yes">
                                    <label for="Id4">Для подготовки ответа</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label >На контроле ГД</label>
                                    <div>
                                        <?php
                                        if($_POST['Control']=="yes"){
                                            $checked1="checked";
                                            $checked2="";
                                        }else{
                                            $checked2="checked";
                                            $checked1="";
                                        }
                                        ?>
                                        <input type="radio" id="contactChoice1"
                                               name="Control" value="yes" checked='<?=$checked1?>'>
                                        <label for="contactChoice1">Да</label>

                                        <input type="radio" id="contactChoice2"
                                               name="Control" value="no" checked='<?=$checked2?>'>
                                        <label for="contactChoice2">Нет</label>
                                    </div>
                                <div class="navbar">
                                    <label class="col-md-5 control-label">Срок ответа</label>
                                    <div class="col-md-7">

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" name="DateAnswer" value='<?=$_POST['DateAnswer']?>' placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-5">
                                <label class="col-sm-3 control-label">Поручение</label>
                                <div class="col-sm-9">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        </div>
                                        <textarea rows="4" class="form-control" name="Resolution"><?=$_POST['Resolution']?></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Исполнитель</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Подразделение</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="department" class="form-control" name="Department" value='<?=$_POST['Department']?>' required>
                                        <datalist id="department">
                                            <?php
                                            foreach ($_SESSION ['department'] as $temp){
                                            ?>
                                            <option value='<?=$temp?>'>
                                                <?php
                                                }
                                                ?>
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->
                        <div class="form-group">

                            <label class="col-md-2 control-label">Исполнитель</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="implementer" class="form-control" name="Implementer" value='<?=$_POST['Implementer']?>' required>
                                        <datalist id="implementer">
                                            <?php
                                            foreach ($_SESSION ['personnel'] as $temp){
                                            ?>
                                            <option value='<?=$temp?>'>
                                                <?php
                                                }
                                                ?>
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->
                        <div class="form-group">

                            <label class="col-md-2 control-label">Непосредственный исполнитель</label>

                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>

                                    <div class="form-group">
                                        <input list="implementer" class="form-control" name="Implementer1" value='<?=$_POST['Implementer1']?>' required>
                                        <datalist id="implementer">
                                            <?php
                                            foreach ($_SESSION ['personnel'] as $temp){
                                            ?>
                                            <option value='<?=$temp?>'>
                                                <?php
                                                }
                                                ?>
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.form group -->

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-8">
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-6">
                        <div class="navbar">
                            <input type="submit" value="Регистрация">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="navbar">
                            <input type="button" value="Очистить форму" onclick="javascript:window.location='/InLettersReg/Reset/'"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</section>





