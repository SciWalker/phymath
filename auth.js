const cognitoAuthConfig = {
    authority: "https://cognito-idp.ap-southeast-1.amazonaws.com/ap-southeast-1_g2114GZQr",
    client_id: "12ap4v63fqjdm1ld22nj79vhpe",
    redirect_uri: "https://www.phymath.com",
    response_type: "code",
    scope: "email openid profile"
};

// Make sure the oidc object is available before creating userManager
let userManager;
if (typeof oidc !== 'undefined') {
    userManager = new oidc.UserManager(cognitoAuthConfig);
} else {
    console.error("OIDC library not loaded properly");
}

function signOutRedirect() {
    const clientId = "12ap4v63fqjdm1ld22nj79vhpe";
    const logoutUri = "https://www.phymath.com";
    const cognitoDomain = "https://phymath.auth.ap-southeast-1.amazoncognito.com";
    window.location.href = `${cognitoDomain}/logout?client_id=${clientId}&logout_uri=${encodeURIComponent(logoutUri)}`;
}