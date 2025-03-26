const cognitoAuthConfig = {
    authority: "https://cognito-idp.ap-southeast-1.amazonaws.com/ap-southeast-1_g2114GZQr",
    client_id: "12ap4v63fqjdm1ld22nj79vhpe",
    redirect_uri: "https://yourdomain.com/index.html",
    response_type: "code",
    scope: "email openid profile"
};
const userManager = new oidc.UserManager(cognitoAuthConfig);

function signOutRedirect() {
    const clientId = "12ap4v63fqjdm1ld22nj79vhpe";
    const logoutUri = "https://yourdomain.com/index.html";
    const cognitoDomain = "https://yourdomain.auth.ap-southeast-1.amazoncognito.com";
    window.location.href = `${cognitoDomain}/logout?client_id=${clientId}&logout_uri=${encodeURIComponent(logoutUri)}`;
}