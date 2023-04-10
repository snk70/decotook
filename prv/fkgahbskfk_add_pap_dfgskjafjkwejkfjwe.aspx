<%@ Page Language="C#" AutoEventWireup="true" CodeFile="fkgahbskfk_add_pap_dfgskjafjkwejkfjwe.aspx.cs" Inherits="prv_fkgahbskfk_add_pap_dfgskjafjkwejkfjwe" %>

<%@ Register assembly="CKEditor.NET" namespace="CKEditor.NET" tagprefix="CKEditor" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>مدیریت مطالب</title>
        <style type="text/css">
        #form1
        {
            direction: ltr;
        }
        
        .right
        {
            float:right;
            direction:Rtl;
        }
     
        
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div style="direction: ltr">
        مطالب<br />
        <br />
        <br />
    <br />
        <asp:Label ID="Label1" runat="server" Text="کلمات کلیدی دسته" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="cate_titlr" runat="server" style="float:right;" Width="824px"></asp:TextBox>
    
        <br />
        <br />
        <br />
        <br />
        <br />
    
        <asp:Label ID="Label2" runat="server" Text="تایتل مطلب" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="prp_title" runat="server" style="float:right;" Width="824px"></asp:TextBox>
    
        <br />
        <br />
        <br />
    
        <asp:Label ID="lbl_link" runat="server" Text="لینک محصول" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="paper_link" runat="server" style="float:right;" 
        Width="702px"></asp:TextBox>
    
        <br />
        <br />
        <br />
        <br />
        <br />
        <asp:Button ID="add_pic" runat="server" Height="32px" OnClick="add_pic_Click" 
            Text="افزوردن" Width="105px" />
        <asp:FileUpload ID="edi_add" runat="server" Height="27px" />
        <br />
        <CKEditor:CKEditorControl ID="editor_text_body" runat="server" Height="411px" 
            Font-Names="sina"></CKEditor:CKEditorControl>
        <br />
        <br />
        <br />
    
        <asp:Label ID="Label3" runat="server" Text="نویسنده" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="auther_name" runat="server" style="float:right;" Width="824px"></asp:TextBox>
    
        <br />
        <br />
    
        <asp:Label ID="Label4" runat="server" Text="تایتل نویسنده" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="auther_title" runat="server" style="float:right;" 
            Width="824px"></asp:TextBox>
    
        <br />
        <br />
    
        <asp:Label ID="Label5" runat="server" Text="آدرس عکس نویسنده" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="auther_pic" runat="server" style="float:right;" Width="824px"></asp:TextBox>
    
        <br />
        <br />
        <br />
    
        <asp:Label ID="Label6" runat="server" Text="کلمات کلیدی ( مربوط به تگ متا)" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="meta_key" runat="server" style="float:right;" Width="824px" 
            Height="111px"></asp:TextBox>
    
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
        <asp:Label ID="Label7" runat="server" Text="جملات کلیدی ( مربوط به تگ متا )" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="meta_desc" runat="server" style="float:right;" Width="824px" 
            Height="87px"></asp:TextBox>
    
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
        <asp:Label ID="Label8" runat="server" Text="توضیحات مختصر جهت نمایش در زیر مطلب" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
        <asp:TextBox ID="paper_cmt" runat="server" style="float:right;" Width="656px" 
            Height="73px"></asp:TextBox>
    
    </div>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    
        <asp:Label ID="Label10" runat="server" Text="عکس شاخص مطلب" 
            style="float:right;font-size:20px;" Height="20px"></asp:Label>
    
    <p>
        <asp:FileUpload ID="img_Upload" runat="server" Style="float: right;" />
    </p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        <asp:Button ID="btn_publish" runat="server" Height="108px" style="float:right;" Text="تأیید و انتشار مطلب" 
            Width="508px" onclick="Button1_Click" />
    </p>
    <p style="direction: ltr">
        &nbsp;</p>
    <p>
        <asp:Button ID="products" runat="server" Height="54px" 
            Text="کنترل پنل" Width="113px" onclick="products_Click" />
    </p>
    <p style="direction: ltr">
        &nbsp;</p>
    <p>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
            ConnectionString="<%$ ConnectionStrings:decotookdbConnectionString %>" 
            DeleteCommand="DELETE FROM [tbl_papers] WHERE [r] = @r" 
            InsertCommand="INSERT INTO [tbl_papers] ([cate_title], [title], [text_boy], [date], [time], [author], [auth_pic], [auth_title], [comment_code], [like_code], [telegram], [facebook], [print], [meta_title], [meta_desc], [paper_cmt], [paper_link], [img], [visit_number]) VALUES (@cate_title, @title, @text_boy, @date, @time, @author, @auth_pic, @auth_title, @comment_code, @like_code, @telegram, @facebook, @print, @meta_title, @meta_desc, @paper_cmt, @paper_link, @img, @visit_number)" 
            ProviderName="<%$ ConnectionStrings:decotookdbConnectionString.ProviderName %>" 
            SelectCommand="SELECT [r], [cate_title], [title], [text_boy], [date], [time], [author], [auth_pic], [auth_title], [comment_code], [like_code], [telegram], [facebook], [print], [meta_title], [meta_desc], [paper_cmt], [paper_link], [img], [visit_number] FROM [tbl_papers]" 
            UpdateCommand="UPDATE [tbl_papers] SET [cate_title] = @cate_title, [title] = @title, [text_boy] = @text_boy, [date] = @date, [time] = @time, [author] = @author, [auth_pic] = @auth_pic, [auth_title] = @auth_title, [comment_code] = @comment_code, [like_code] = @like_code, [telegram] = @telegram, [facebook] = @facebook, [print] = @print, [meta_title] = @meta_title, [meta_desc] = @meta_desc, [paper_cmt] = @paper_cmt, [paper_link] = @paper_link, [img] = @img, [visit_number] = @visit_number WHERE [r] = @r">
            <DeleteParameters>
                <asp:Parameter Name="r" Type="Int32" />
            </DeleteParameters>
            <InsertParameters>
                <asp:Parameter Name="cate_title" Type="String" />
                <asp:Parameter Name="title" Type="String" />
                <asp:Parameter Name="text_boy" Type="String" />
                <asp:Parameter Name="date" Type="String" />
                <asp:Parameter Name="time" Type="String" />
                <asp:Parameter Name="author" Type="String" />
                <asp:Parameter Name="auth_pic" Type="String" />
                <asp:Parameter Name="auth_title" Type="String" />
                <asp:Parameter Name="comment_code" Type="String" />
                <asp:Parameter Name="like_code" Type="String" />
                <asp:Parameter Name="telegram" Type="String" />
                <asp:Parameter Name="facebook" Type="String" />
                <asp:Parameter Name="print" Type="String" />
                <asp:Parameter Name="meta_title" Type="String" />
                <asp:Parameter Name="meta_desc" Type="String" />
                <asp:Parameter Name="paper_cmt" Type="String" />
                <asp:Parameter Name="paper_link" Type="String" />
                <asp:Parameter Name="img" Type="String" />
                <asp:Parameter Name="visit_number" Type="Int32" />
            </InsertParameters>
            <UpdateParameters>
                <asp:Parameter Name="cate_title" Type="String" />
                <asp:Parameter Name="title" Type="String" />
                <asp:Parameter Name="text_boy" Type="String" />
                <asp:Parameter Name="date" Type="String" />
                <asp:Parameter Name="time" Type="String" />
                <asp:Parameter Name="author" Type="String" />
                <asp:Parameter Name="auth_pic" Type="String" />
                <asp:Parameter Name="auth_title" Type="String" />
                <asp:Parameter Name="comment_code" Type="String" />
                <asp:Parameter Name="like_code" Type="String" />
                <asp:Parameter Name="telegram" Type="String" />
                <asp:Parameter Name="facebook" Type="String" />
                <asp:Parameter Name="print" Type="String" />
                <asp:Parameter Name="meta_title" Type="String" />
                <asp:Parameter Name="meta_desc" Type="String" />
                <asp:Parameter Name="paper_cmt" Type="String" />
                <asp:Parameter Name="paper_link" Type="String" />
                <asp:Parameter Name="img" Type="String" />
                <asp:Parameter Name="visit_number" Type="Int32" />
                <asp:Parameter Name="r" Type="Int32" />
            </UpdateParameters>
        </asp:SqlDataSource>
    </p>
    <p>
        <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
            BackColor="White" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px" 
            CellPadding="4" CssClass="right" DataKeyNames="r" DataSourceID="SqlDataSource2" 
            EmptyDataText="There are no data records to display." AllowPaging="True" 
            AllowSorting="True">
            <Columns>
                <asp:BoundField DataField="r" HeaderText="ردیف" ReadOnly="True" 
                    SortExpression="r" />
                <asp:BoundField DataField="cate_title" HeaderText="دسته" 
                    SortExpression="cate_title" />
                <asp:BoundField DataField="title" HeaderText="تایتل" SortExpression="title" />
                <asp:BoundField DataField="date" HeaderText="تاریخ" SortExpression="date" />
                <asp:BoundField DataField="time" HeaderText="زمان" SortExpression="time" />
                <asp:BoundField DataField="author" HeaderText="نویسنده" 
                    SortExpression="author" />
                <asp:BoundField DataField="auth_pic" HeaderText="تصویر نویسنده" 
                    SortExpression="auth_pic" />
                <asp:BoundField DataField="auth_title" HeaderText="تایتل نویسنده" 
                    SortExpression="auth_title" />
                <asp:BoundField DataField="meta_title" HeaderText="کلمات کلیدی متا" 
                    SortExpression="meta_title" />
                <asp:BoundField DataField="meta_desc" HeaderText="جملات کلیدی متا" 
                    SortExpression="meta_desc" />
                <asp:BoundField DataField="paper_cmt" HeaderText="توضیحات مختصر" 
                    SortExpression="paper_cmt" />
                <asp:BoundField DataField="paper_link" HeaderText="لینک مطلب" 
                    SortExpression="paper_link" />
                <asp:BoundField DataField="img" HeaderText="عکس" SortExpression="img" />
                               <asp:HyperLinkField DataNavigateUrlFields="r" 
                    DataNavigateUrlFormatString="get_to_post.aspx?mode=edi&amp;rp={0}" 
                    HeaderText="دکمه ویرایش" Text="ویرایش" />
                <asp:HyperLinkField DataNavigateUrlFields="r,paper_link,img" 
                    DataNavigateUrlFormatString="del_posts.aspx?r={0}&amp;link={1}&amp;img={2}&amp;posttype=art" 
                    HeaderText="حذف محصول" Text="حذف" />
            </Columns>
            <FooterStyle BackColor="#FFFFCC" ForeColor="#330099" />
            <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="#FFFFCC" />
            <PagerStyle BackColor="#FFFFCC" ForeColor="#330099" HorizontalAlign="Center" />
            <RowStyle BackColor="White" ForeColor="#330099" />
            <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="#663399" />
            <SortedAscendingCellStyle BackColor="#FEFCEB" />
            <SortedAscendingHeaderStyle BackColor="#AF0101" />
            <SortedDescendingCellStyle BackColor="#F6F0C0" />
            <SortedDescendingHeaderStyle BackColor="#7E0000" />
        </asp:GridView>
        <asp:SqlDataSource ID="SqlDataSource2" runat="server" 
            ConnectionString="<%$ ConnectionStrings:decotookdbConnectionString %>" 
            DeleteCommand="DELETE FROM [tbl_papers] WHERE [r] = @r" 
            InsertCommand="INSERT INTO [tbl_papers] ([cate_title], [title], [text_boy], [date], [time], [author], [auth_pic], [auth_title], [comment_code], [like_code], [telegram], [facebook], [print], [meta_title], [meta_desc], [paper_cmt], [paper_link], [img], [visit_number]) VALUES (@cate_title, @title, @text_boy, @date, @time, @author, @auth_pic, @auth_title, @comment_code, @like_code, @telegram, @facebook, @print, @meta_title, @meta_desc, @paper_cmt, @paper_link, @img, @visit_number)" 
            ProviderName="<%$ ConnectionStrings:decotookdbConnectionString.ProviderName %>" 
            SelectCommand="SELECT [r], [cate_title], [title], [text_boy], [date], [time], [author], [auth_pic], [auth_title], [comment_code], [like_code], [telegram], [facebook], [print], [meta_title], [meta_desc], [paper_cmt], [paper_link], [img], [visit_number] FROM [tbl_papers]" 
            UpdateCommand="UPDATE [tbl_papers] SET [cate_title] = @cate_title, [title] = @title, [text_boy] = @text_boy, [date] = @date, [time] = @time, [author] = @author, [auth_pic] = @auth_pic, [auth_title] = @auth_title, [comment_code] = @comment_code, [like_code] = @like_code, [telegram] = @telegram, [facebook] = @facebook, [print] = @print, [meta_title] = @meta_title, [meta_desc] = @meta_desc, [paper_cmt] = @paper_cmt, [paper_link] = @paper_link, [img] = @img, [visit_number] = @visit_number WHERE [r] = @r">
            <DeleteParameters>
                <asp:Parameter Name="r" Type="Int32" />
            </DeleteParameters>
            <InsertParameters>
                <asp:Parameter Name="cate_title" Type="String" />
                <asp:Parameter Name="title" Type="String" />
                <asp:Parameter Name="text_boy" Type="String" />
                <asp:Parameter Name="date" Type="String" />
                <asp:Parameter Name="time" Type="String" />
                <asp:Parameter Name="author" Type="String" />
                <asp:Parameter Name="auth_pic" Type="String" />
                <asp:Parameter Name="auth_title" Type="String" />
                <asp:Parameter Name="comment_code" Type="String" />
                <asp:Parameter Name="like_code" Type="String" />
                <asp:Parameter Name="telegram" Type="String" />
                <asp:Parameter Name="facebook" Type="String" />
                <asp:Parameter Name="print" Type="String" />
                <asp:Parameter Name="meta_title" Type="String" />
                <asp:Parameter Name="meta_desc" Type="String" />
                <asp:Parameter Name="paper_cmt" Type="String" />
                <asp:Parameter Name="paper_link" Type="String" />
                <asp:Parameter Name="img" Type="String" />
                <asp:Parameter Name="visit_number" Type="Int32" />
            </InsertParameters>
            <UpdateParameters>
                <asp:Parameter Name="cate_title" Type="String" />
                <asp:Parameter Name="title" Type="String" />
                <asp:Parameter Name="text_boy" Type="String" />
                <asp:Parameter Name="date" Type="String" />
                <asp:Parameter Name="time" Type="String" />
                <asp:Parameter Name="author" Type="String" />
                <asp:Parameter Name="auth_pic" Type="String" />
                <asp:Parameter Name="auth_title" Type="String" />
                <asp:Parameter Name="comment_code" Type="String" />
                <asp:Parameter Name="like_code" Type="String" />
                <asp:Parameter Name="telegram" Type="String" />
                <asp:Parameter Name="facebook" Type="String" />
                <asp:Parameter Name="print" Type="String" />
                <asp:Parameter Name="meta_title" Type="String" />
                <asp:Parameter Name="meta_desc" Type="String" />
                <asp:Parameter Name="paper_cmt" Type="String" />
                <asp:Parameter Name="paper_link" Type="String" />
                <asp:Parameter Name="img" Type="String" />
                <asp:Parameter Name="visit_number" Type="Int32" />
                <asp:Parameter Name="r" Type="Int32" />
            </UpdateParameters>
        </asp:SqlDataSource>
    </p>
    <p>
    </p>
    </form>
</body>
</html>
