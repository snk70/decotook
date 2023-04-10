<%@ Page Language="C#" %>

<%
    try
    {
        if (Session[Request.UserHostAddress].ToString() != Request.UserAgent.GetHashCode() + DateTime.Now.Hour.GetHashCode().ToString())
        {
            Session.RemoveAll();
            Response.Redirect("~/Error.html");
            return;
        }
    }
    catch
    {
        Session.RemoveAll();
        Response.Redirect("~/Error.html");
        return;
    }

    RemotePostData.RemotePost rm = new RemotePostData.RemotePost("fkgahbskfk_add_pap_dfgskjafjkwejkfjwe.aspx");
    rm.Add("rp", Request.QueryString["rp"].ToString());
    rm.Add("mode", Request.QueryString["mode"].ToString());
    rm.Post();
    
    
%>