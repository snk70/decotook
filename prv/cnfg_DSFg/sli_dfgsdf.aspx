<%@ Page Language="C#" AutoEventWireup="true" CodeFile="sli_dfgsdf.aspx.cs" Inherits="prv_cnfg_DSFg_sli_dfgsdf" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>ویرایش لینک منو</title>
    <style>
            .right
        {
            float:right;
            direction:Rtl;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:TextBox ID="TextBox1" runat="server" Width="1222px" CssClass="right"></asp:TextBox>
    
        <br />
        <br />
        <br />
    
    </div>
    <p>
        <asp:TextBox ID="TextBox2" runat="server" Width="1222px" CssClass="right"></asp:TextBox>
    </p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p style="direction: ltr">
        <asp:TextBox ID="TextBox3" runat="server" Width="1222px" CssClass="right"></asp:TextBox>
    </p>
    <p style="direction: ltr">
        &nbsp;</p>
    <p style="direction: ltr">
        &nbsp;</p>
    <p style="direction: ltr">
        &nbsp;</p>
    <p style="direction: ltr">
        <asp:Button ID="Button1" runat="server" CssClass="right" Height="79px" 
            onclick="Button1_Click" Text="اعمال" Width="205px" />
    </p>
    </form>
    <p style="direction: ltr">
        &nbsp;</p>
</body>
</html>
