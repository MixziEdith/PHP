[1:14 p. m., 11/2/2021] Fer🍬💜: <%@ Page Title="Home Page" Language="VB" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.vb" Inherits="HelloWorld._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">


    <div class="row">
        <div style="height:100px; height:200px;">
            <asp:Label ID="TareaDos" runat="server" Font-Size="20px" ForeColor="#cc00ff">
            </asp:Label>
        </div>

        <div style="height:100px; height:200px;">
            <asp:Button ID="btMensaje" Text="Presionar" font-size="24px" ForeColor="#0099ff" 
                runat="server" OnClick="btMensaje_Click" />

        </div>

    </div>

</asp:Content>
[1:15 p. m., 11/2/2021] Fer🍬💜: Public Class _Default
    Inherits Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As EventArgs) Handles Me.Load

    End Sub

    Protected Sub btMensaje_Click(sender As Object, e As EventArgs)

        TareaDos.Text = "Hola Mundo de ASP.C#"



    End Sub
End Class
