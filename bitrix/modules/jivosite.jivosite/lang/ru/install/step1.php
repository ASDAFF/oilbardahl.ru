<?
$sites_aviable = CSite::GetList($by="sort", $order="desc", Array());
$sites = "";

while ($site = $sites_aviable->fetch())
{
    $sites .= '<input '.($site['DEF'] == "Y" ? "checked='checked'" : "").' class="adm-designed-checkbox-label" type="checkbox" name="sites['.$site['ID'].']" />
                   <label>'.$site['NAME'].' </label><br/>';
}
$MESS['SIGN_UP_FORM'] = "
        <p style='width: 500px'>������ �� �������������� �����, ���� ��������� ������������ ������� JivoSite � ������ ����� ".COption::GetOptionString('main', 'server_name').". ���� ��� ����� ������ - ����������, �������� ��� �� <a href='mailto:info@jivosite.ru'>info@jivosite.ru</a> ��� <a href='http://jivosite.ru/support' target='_blank'>������� ������ �� ������</a></p>

        <form method='post'>
        <p><b>��� e-mail (�� �� �����)</b>
        <input type='text' name='email' value='".CUser::GetEmail()."'/>
        <p class='comment'>������� ����� e-mail, ������� �� ������ ������������ ��� ����� � ������ ���������� JivoSite, � ��� �� ��� ����� � ���������� ������ � ��������� ����������� �� JivoSite. ���� � ��� ��� ���� ������� JivoSite - ������� ��� e-mail � ������, ������� �� ������������ ��� �����������</p>

        <p><b>������ � JivoSite</b>
        <input type='password' name='password'/>
        <p class='comment'>���������� ������ ��� ����������� � ������� JivoSite. � ����� ������������, ���� ������ �� ������ ��������� � ������� �� �������. ���� � ��� ��� ���� ������� JivoSite - ������� ������ �� ����</p>

        <p><b>���� ���</b>
        <input type='text' name='userDisplayName' value='".CUser::GetFullName()."'/>
        <p class='comment'>���� ��� ��-������, ������� ����� ������������ ����������� ����� � ����</p>

        <p><b>�������� �����</b></p>
        ".$sites."
        <p class='comment'>�������� �����, �� ������� ����� ������������ ���</p>

        <input type='hidden' name='step' value='2'/>

        <p><input type='submit' value='���������� ������-����������� JivoSite!'>
        </form>
    ";

$MESS['BACK_TO_MODULE_LIST'] = "��������� � ������ �������";
?>
