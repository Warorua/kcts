(this["webpackJsonpe-constructions-portal-auth"] =
  this["webpackJsonpe-constructions-portal-auth"] || []).push([
  [4],
  {
    119: function (e, t, a) {
      "use strict";
      (function (e) {
        var n = a(51),
          r = a(65),
          c = a.n(r),
          o = a(120),
          i = a(121),
          u = a(122),
          s = a(123),
          l = a(124),
          d = a(125),
          O = a(126),
          b = a(91),
          j = a(127),
          E = localStorage.getItem("token");
        E &&
          (c.a.defaults.headers.common.Authorization = E
            ? "Bearer ".concat(E)
            : null);
        var m = Object(n.combineReducers)({
          user: o.a,
          registerUser: i.a,
          OTP: u.a,
          changePassword: s.a,
          checkUser: l.a,
          resetPassword: d.a,
          openMenu: O.a,
          burgerMenu: b.reducer,
          global: e,
          modal: j.a,
        });
        t.a = function (e, t) {
          return m("LOGOUT_USER" === t.type ? void 0 : e, t);
        };
      }).call(this, a(55));
    },
    120: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(65),
        c = a.n(r),
        o = a(3),
        i = {
          currentUser: {},
          isLoading: !1,
          isAuthenticated: !1,
          error: null,
          isOtpSent: !1,
        };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : i,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case o.s:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !0, error: null }
            );
          case o.u:
            var a = t.response,
              r = a.token,
              u = a.first_time_login,
              s = t.response.user,
              l = s.phone_number;
            return (
              r &&
                localStorage.setItem(
                  "token",
                  null === r || void 0 === r ? void 0 : r.access
                ),
              Object(n.a)(
                Object(n.a)({}, e),
                {},
                {
                  currentUser: { phone_number: l },
                  isFirstTimeLogin: u,
                  isLoading: !1,
                  isAuthenticated: !1,
                  isOtpSent: !0,
                  error: null,
                }
              )
            );
          case o.t:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, error: t.error, isAuthenticated: !1 }
            );
          case o.v:
            return (
              delete c.a.defaults.headers.common.Authorization,
              Object(n.a)(Object(n.a)({}, e), i)
            );
          case o.j:
            return Object(n.a)(Object(n.a)({}, e), i);
          default:
            return e;
        }
      };
    },
    121: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(3),
        c = {
          registeredUser: {},
          isLoading: !1,
          isSuccessFull: !1,
          error: null,
          isNewCustomer: !1,
          customerDetails: {},
          userIsAvailable: !1,
          hasAccount: !1,
          serialNumber: { isValid: !1, isLoading: !1, error: null },
          alienNumber: { isValid: !1, isLoading: !1, error: null },
          maidenName: { valid: !1, isLoading: !1, error: null },
          kraPinValidation: { isLoading: !1, error: null, data: {} },
          companyKraPinValidation: { isLoading: !1, error: null, data: {} },
          mobileNumber: { isLoading: !1, error: null, data: {} },
          verificationEmail: { isLoading: !1, error: null, data: {} },
          validatePassCode: { isLoading: !1, error: null, data: {} },
          professionalTypes: { isLoading: !1, error: null, data: [] },
          activeMenu: "individual",
        };
      t.a = function () {
        var e,
          t,
          a,
          o,
          i,
          u,
          s =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : c,
          l = arguments.length > 1 ? arguments[1] : void 0;
        switch (l.type) {
          case r.w:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              { isLoading: !0, error: null }
            );
          case r.y:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                registeredUser: l.response,
                isLoading: !1,
                isSuccessFull: !0,
                error: null,
              }
            );
          case r.x:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              { isLoading: !1, error: l.error, isSuccessFull: !1 }
            );
          case r.e:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              { isLoading: !0, error: null }
            );
          case r.g:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                customerDetails: l.response.data,
                hasAccount: l.response.has_account,
                isLoading: !1,
                userIsAvailable: !l.response.has_account,
                error: null,
              }
            );
          case r.f:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              { isLoading: !1, error: l.error }
            );
          case r.R:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                serialNumber: Object(n.a)(
                  Object(n.a)({}, s.serialNumber),
                  {},
                  { isLoading: !0, error: null }
                ),
              }
            );
          case "".concat(r.R, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                serialNumber: Object(n.a)(
                  Object(n.a)({}, s.serialNumber),
                  {},
                  {
                    isLoading: !1,
                    isValid:
                      (null === (e = l.response) || void 0 === e
                        ? void 0
                        : e.valid) || !0,
                    error: null,
                  }
                ),
              }
            );
          case "".concat(r.R, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                serialNumber: Object(n.a)(
                  Object(n.a)({}, s.serialNumber),
                  {},
                  {
                    isLoading: !1,
                    isValid:
                      (null === (t = l.response) || void 0 === t
                        ? void 0
                        : t.valid) || !1,
                    error: l.error,
                  }
                ),
              }
            );
          case r.L:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                alienNumber: Object(n.a)(
                  Object(n.a)({}, s.alienNumber),
                  {},
                  { isLoading: !0, error: null }
                ),
              }
            );
          case "".concat(r.L, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                alienNumber: Object(n.a)(
                  Object(n.a)({}, s.alienNumber),
                  {},
                  {
                    isLoading: !1,
                    isValid:
                      (null === (a = l.response) || void 0 === a
                        ? void 0
                        : a.valid) || !0,
                    error: null,
                  }
                ),
              }
            );
          case "".concat(r.L, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                alienNumber: Object(n.a)(
                  Object(n.a)({}, s.alienNumber),
                  {},
                  {
                    isLoading: !1,
                    isValid:
                      (null === (o = l.response) || void 0 === o
                        ? void 0
                        : o.valid) || !1,
                    error: l.error,
                  }
                ),
              }
            );
          case r.O:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                maidenName: Object(n.a)(
                  Object(n.a)({}, s.maidenName),
                  {},
                  { isLoading: !0, error: null, isValid: !1 }
                ),
              }
            );
          case "".concat(r.O, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                maidenName: Object(n.a)(
                  Object(n.a)({}, s.maidenName),
                  {},
                  {
                    isLoading: !1,
                    isValid:
                      (null === (i = l.response) || void 0 === i
                        ? void 0
                        : i.valid) || !0,
                    error: null,
                  }
                ),
              }
            );
          case "".concat(r.O, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                maidenName: Object(n.a)(
                  Object(n.a)({}, s.maidenName),
                  {},
                  { isLoading: !1, isValid: !1, error: l.error }
                ),
              }
            );
          case r.N:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                kraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.kraPinValidation),
                  {},
                  { isLoading: !0, error: null, data: {} }
                ),
              }
            );
          case "".concat(r.N, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                kraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.kraPinValidation),
                  {},
                  { isLoading: !1, error: null, data: l.response }
                ),
              }
            );
          case "".concat(r.N, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                kraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.kraPinValidation),
                  {},
                  { isLoading: !1, error: l.error, data: {} }
                ),
              }
            );
          case r.a:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                mobileNumber: Object(n.a)(
                  Object(n.a)({}, s.mobileNumber),
                  {},
                  { isLoading: !0, error: null, data: {} }
                ),
              }
            );
          case "".concat(r.a, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                mobileNumber: Object(n.a)(
                  Object(n.a)({}, s.mobileNumber),
                  {},
                  { isLoading: !1, error: null, data: l.response }
                ),
              }
            );
          case "".concat(r.a, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                mobileNumber: Object(n.a)(
                  Object(n.a)({}, s.mobileNumber),
                  {},
                  { isLoading: !1, error: l.error, data: {} }
                ),
              }
            );
          case r.l:
            return Object(n.a)(Object(n.a)({}, s), c);
          case "SET_ACTIVE_MENU":
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              { activeMenu: l.menuType }
            );
          case r.M:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                companyKraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.companyKraPinValidation),
                  {},
                  { isLoading: !0, error: null, data: {} }
                ),
              }
            );
          case "".concat(r.M, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                companyKraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.companyKraPinValidation),
                  {},
                  { isLoading: !1, error: null, data: l.response }
                ),
              }
            );
          case "".concat(r.M, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                companyKraPinValidation: Object(n.a)(
                  Object(n.a)({}, s.companyKraPinValidation),
                  {},
                  { isLoading: !1, error: l.error, data: {} }
                ),
              }
            );
          case r.G:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                verificationEmail: Object(n.a)(
                  Object(n.a)({}, s.verificationEmail),
                  {},
                  { isLoading: !0, error: null, data: {} }
                ),
              }
            );
          case "".concat(r.G, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                verificationEmail: Object(n.a)(
                  Object(n.a)({}, s.verificationEmail),
                  {},
                  { isLoading: !1, error: null, data: l.response }
                ),
              }
            );
          case "".concat(r.G, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                verificationEmail: Object(n.a)(
                  Object(n.a)({}, s.verificationEmail),
                  {},
                  { isLoading: !1, error: l.error, data: {} }
                ),
              }
            );
          case r.Q:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                validatePassCode: Object(n.a)(
                  Object(n.a)({}, s.validatePassCode),
                  {},
                  { isLoading: !0, error: null, data: {} }
                ),
              }
            );
          case "".concat(r.Q, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                validatePassCode: Object(n.a)(
                  Object(n.a)({}, s.validatePassCode),
                  {},
                  { isLoading: !1, error: null, data: l.response }
                ),
              }
            );
          case "".concat(r.Q, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                validatePassCode: Object(n.a)(
                  Object(n.a)({}, s.validatePassCode),
                  {},
                  { isLoading: !1, error: l.error, data: {} }
                ),
              }
            );
          case r.r:
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                professionalTypes: Object(n.a)(
                  Object(n.a)({}, s.professionalTypes),
                  {},
                  { isLoading: !0, error: null, data: [] }
                ),
              }
            );
          case "".concat(r.r, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                professionalTypes: Object(n.a)(
                  Object(n.a)({}, s.professionalTypes),
                  {},
                  {
                    isLoading: !1,
                    error: null,
                    data:
                      null === (u = l.response) || void 0 === u
                        ? void 0
                        : u.results,
                  }
                ),
              }
            );
          case "".concat(r.r, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, s),
              {},
              {
                professionalTypes: Object(n.a)(
                  Object(n.a)({}, s.validatePassCode),
                  {},
                  { isLoading: !1, error: l.error, data: [] }
                ),
              }
            );
          default:
            return s;
        }
      };
    },
    122: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(3),
        c = {
          isLoading: !1,
          isOtpSent: !1,
          error: null,
          otpData: {},
          isValidOtp: !1,
        };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : c,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case r.z:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                isLoading: !0,
                isOtpSent: !1,
                sValidOtp: !1,
                error: null,
                otpData: {},
              }
            );
          case r.B:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                isLoading: !1,
                isOtpSent: !0,
                error: null,
                otpData: t.response,
                isValidOtp: !1,
              }
            );
          case r.A:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, error: t.error, isOtpSent: !1, isValidOtp: !1 }
            );
          case r.S:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !0, error: null }
            );
          case r.U:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, isOtpSent: !0, isValidOtp: !0, error: null }
            );
          case r.T:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, error: t.error, isValidOtp: !1 }
            );
          case r.k:
            return Object(n.a)(Object(n.a)({}, e), c);
          default:
            return e;
        }
      };
    },
    123: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(3),
        c = { isLoading: !1, isSuccessFull: !1, error: null };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : c,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case r.b:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !0, error: null }
            );
          case r.d:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, isSuccessFull: !0, error: null }
            );
          case r.c:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, isSuccessFull: !1, error: t.error }
            );
          case r.h:
            return Object(n.a)(Object(n.a)({}, e), c);
          default:
            return e;
        }
      };
    },
    124: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(3),
        c = {
          isLoading: !1,
          isSuccessFull: !1,
          error: null,
          customerDetails: {},
          hasAccount: !1,
        };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : c,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case r.e:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !0, error: null }
            );
          case r.g:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                hasAccount: !0,
                customerDetails: t.response.data,
                isSuccessFull: !0,
                isLoading: !1,
                error: null,
              }
            );
          case r.f:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, error: t.error }
            );
          case r.i:
            return Object(n.a)(Object(n.a)({}, e), c);
          default:
            return e;
        }
      };
    },
    125: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = a(3),
        c = {
          isLoading: !1,
          isSuccessFull: !1,
          error: null,
          requestCode: { isLoading: !1, isOTPSent: !1, error: "" },
          forgotResponse: { message: "" },
        };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : c,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case r.D:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !0, error: null }
            );
          case r.F:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                isLoading: !1,
                isSuccessFull: !0,
                forgotResponse: t.response,
                error: null,
              }
            );
          case r.E:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { isLoading: !1, error: t.error }
            );
          case r.C:
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                requestCode: Object(n.a)(
                  Object(n.a)({}, e.requestCode),
                  {},
                  { isLoading: !0, isOTPSent: !1, error: "" }
                ),
              }
            );
          case "".concat(r.C, "_SUCCESS"):
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                error: null,
                requestCode: Object(n.a)(
                  Object(n.a)({}, e.requestCode),
                  {},
                  { isLoading: !1, isOTPSent: !0, error: "" }
                ),
                forgotResponse: t.response,
              }
            );
          case "".concat(r.C, "_FAILURE"):
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                requestCode: Object(n.a)(
                  Object(n.a)({}, e.requestCode),
                  {},
                  { isLoading: !1, isOTPSent: !1, error: t.error }
                ),
              }
            );
          case r.m:
            return Object(n.a)(Object(n.a)({}, e), c);
          default:
            return e;
        }
      };
    },
    126: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = { openMenu: void 0, name: void 0, serviceName: void 0 };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : r,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case "SET_OPEN_MENU":
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              {
                openMenu: t.menuOptions.openMenu,
                name: t.menuOptions.name,
                serviceName: t.menuOptions.serviceName,
              }
            );
          default:
            return e;
        }
      };
    },
    127: function (e, t, a) {
      "use strict";
      var n = a(0),
        r = { shouldOpen: !1, modalType: "" };
      t.a = function () {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : r,
          t = arguments.length > 1 ? arguments[1] : void 0;
        switch (t.type) {
          case "OPEN_MODAL":
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { shouldOpen: !0, modalType: t.data }
            );
          case "CLOSE_MODAL":
            return Object(n.a)(
              Object(n.a)({}, e),
              {},
              { shouldOpen: !1, modalType: "" }
            );
          default:
            return e;
        }
      };
    },
    146: function (e, t, a) {
      e.exports = a(181);
    },
    177: function (e, t, a) {},
    178: function (e, t, a) {},
    179: function (e, t, a) {},
    181: function (e, t, a) {
      "use strict";
      a.r(t);
      var n = a(1),
        r = a.n(n),
        c = a(64),
        o = a.n(c),
        i = a(53),
        u = a(54),
        s = a(15),
        l = a(204),
        d = a(135),
        O = {
          palette: {
            primary: { dark: "#346634", main: "#346634", contrastText: "#fff" },
            secondary: { main: "rgb(255, 0, 0)" },
          },
          typography: {
            fontSize: 16,
            fontFamily: ["Nunito", "sans-serif"].join(","),
          },
        },
        b = Object(d.a)(O),
        j = a(51),
        E = a(118),
        m = a(128),
        p = a(119),
        S = (a(171), [m.a]);
      var f = Object(j.createStore)(
          p.a,
          Object(E.composeWithDevTools)(j.applyMiddleware.apply(void 0, S))
        ),
        g = r.a.lazy(function () {
          return Promise.all([a.e(0), a.e(2), a.e(11), a.e(10)]).then(
            a.bind(null, 744)
          );
        }),
        L = r.a.lazy(function () {
          return a.e(17).then(a.bind(null, 736));
        }),
        v = Object(s.h)(function (e) {
          var t = Object(s.f)().location.pathname;
          return r.a.createElement(
            r.a.Fragment,
            null,
            r.a.createElement(
              n.Suspense,
              {
                fallback: r.a.createElement(
                  "div",
                  { id: "preloader" },
                  r.a.createElement(
                    "div",
                    { id: "status" },
                    r.a.createElement(
                      "div",
                      { className: "spinner" },
                      r.a.createElement("div", { className: "double-bounce1" }),
                      r.a.createElement("div", { className: "double-bounce2" })
                    )
                  )
                ),
              },
              r.a.createElement(g, null),
              r.a.createElement("div", null, e.children),
              !t.includes("downloads") && r.a.createElement(L, null)
            )
          );
        }),
        _ = a(58),
        h =
          (a(177),
          a(178),
          a(179),
          a(180),
          Object(n.lazy)(function () {
            return Promise.all([a.e(0), a.e(1), a.e(2), a.e(3), a.e(8)]).then(
              a.bind(null, 745)
            );
          })),
        R = Object(n.lazy)(function () {
          return Promise.all([a.e(0), a.e(1), a.e(2), a.e(3), a.e(9)]).then(
            a.bind(null, 742)
          );
        }),
        C = Object(n.lazy)(function () {
          return a.e(16).then(a.bind(null, 738));
        }),
        A = Object(n.lazy)(function () {
          return Promise.all([a.e(0), a.e(1), a.e(2), a.e(13)]).then(
            a.bind(null, 747)
          );
        }),
        U = Object(n.lazy)(function () {
          return Promise.all([a.e(7), a.e(18)]).then(a.bind(null, 748));
        }),
        P = Object(n.lazy)(function () {
          return Promise.all([a.e(0), a.e(1), a.e(14), a.e(15)]).then(
            a.bind(null, 749)
          );
        }),
        I = Object(n.lazy)(function () {
          return a.e(12).then(a.bind(null, 746));
        }),
        T = Object(n.lazy)(function () {
          return a.e(20).then(a.bind(null, 750));
        }),
        N = Object(n.lazy)(function () {
          return a.e(19).then(a.bind(null, 751));
        }),
        y = [{ path: "", component: C }],
        F = [
          { path: "/", component: I, exact: !0 },
          { path: "/home", component: I, exact: !0 },
          { path: "/login", component: h, exact: !0 },
          { path: "/signup", component: R, exact: !0 },
          { path: "/recover-password", component: A, exact: !0 },
          { path: "/contact", component: P, exact: !0 },
          { path: "/faqs", component: U, exact: !0 },
          { path: "/terms-and-conditions/:id", component: T, exact: !0 },
          { path: "/data-privacy-policy", component: N, exact: !0 },
        ],
        V = a(205),
        D = a(4),
        k = a(5),
        w = a(31),
        M = a(33),
        x = (function (e) {
          Object(w.a)(a, e);
          var t = Object(M.a)(a);
          function a(e) {
            var n;
            return (
              Object(D.a)(this, a),
              ((n = t.call(this, e)).state = { hasError: !1 }),
              n
            );
          }
          return (
            Object(k.a)(
              a,
              [
                { key: "componentDidCatch", value: function (e, t) {} },
                {
                  key: "render",
                  value: function () {
                    return this.state.hasError
                      ? r.a.createElement("h1", null, "Something went wrong.")
                      : this.props.children;
                  },
                },
              ],
              [
                {
                  key: "getDerivedStateFromError",
                  value: function (e) {
                    return { hasError: !0 };
                  },
                },
              ]
            ),
            a
          );
        })(r.a.Component),
        G = Object(s.h)(function () {
          return r.a.createElement(
            x,
            null,
            r.a.createElement(
              l.a,
              { theme: b },
              r.a.createElement(V.a, null),
              r.a.createElement(
                u.Provider,
                { store: f },
                r.a.createElement(
                  v,
                  null,
                  r.a.createElement(
                    s.c,
                    null,
                    F.map(function (e, t) {
                      return r.a.createElement(s.a, {
                        path: e.path,
                        component: e.component,
                        key: t,
                        exact: e.exact,
                      });
                    }),
                    y.map(function (e, t) {
                      return r.a.createElement(s.a, {
                        path: e.path,
                        component:
                          ((a = e.component),
                          Object(s.h)(
                            Object(u.connect)(null, null)(function (e) {
                              var t = e.history,
                                c = localStorage.getItem("token");
                              return (
                                Object(n.useEffect)(
                                  function () {
                                    if (!c)
                                      return (
                                        localStorage.setItem(
                                          "url",
                                          window.location.pathname
                                        ),
                                        _.a.logoutUser(
                                          t,
                                          "Please login to continue"
                                        )
                                      );
                                    var e = _.a.decodeToken().exp;
                                    return (
                                      _.a.isExpired(e) &&
                                        _.a.logoutUser(
                                          t,
                                          "Session Expired. Login to continue"
                                        ),
                                      function () {}
                                    );
                                  },
                                  [t, c]
                                ),
                                c ? r.a.createElement(a, null) : null
                              );
                            })
                          )),
                        key: t,
                        exact: e.exact,
                      });
                      var a;
                    })
                  )
                )
              )
            )
          );
        });
      Boolean(
        "localhost" === window.location.hostname ||
          "[::1]" === window.location.hostname ||
          window.location.hostname.match(
            /^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/
          )
      );
      var z = a(196),
        K = a(208),
        H = a(134);
      try {
        K.a({
          dsn: "".concat(
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28"
          ),
          integrations: [new H.a()],
          tracesSampleRate: 1,
        });
      } catch (B) {}
      var W = r.a.createElement(
        i.a,
        { basename: "/" },
        r.a.createElement(
          n.Suspense,
          { fallback: r.a.createElement(z.a, null) },
          r.a.createElement(G, null)
        )
      );
      o.a.render(W, document.getElementById("root")),
        "serviceWorker" in navigator &&
          navigator.serviceWorker.ready.then(function (e) {
            e.unregister();
          });
    },
    3: function (e, t, a) {
      "use strict";
      a.d(t, "s", function () {
        return n;
      }),
        a.d(t, "u", function () {
          return r;
        }),
        a.d(t, "t", function () {
          return c;
        }),
        a.d(t, "v", function () {
          return o;
        }),
        a.d(t, "w", function () {
          return i;
        }),
        a.d(t, "y", function () {
          return u;
        }),
        a.d(t, "x", function () {
          return s;
        }),
        a.d(t, "e", function () {
          return l;
        }),
        a.d(t, "g", function () {
          return d;
        }),
        a.d(t, "f", function () {
          return O;
        }),
        a.d(t, "P", function () {
          return b;
        }),
        a.d(t, "L", function () {
          return j;
        }),
        a.d(t, "S", function () {
          return E;
        }),
        a.d(t, "U", function () {
          return m;
        }),
        a.d(t, "T", function () {
          return p;
        }),
        a.d(t, "z", function () {
          return S;
        }),
        a.d(t, "B", function () {
          return f;
        }),
        a.d(t, "A", function () {
          return g;
        }),
        a.d(t, "o", function () {
          return L;
        }),
        a.d(t, "q", function () {
          return v;
        }),
        a.d(t, "p", function () {
          return _;
        }),
        a.d(t, "b", function () {
          return h;
        }),
        a.d(t, "d", function () {
          return R;
        }),
        a.d(t, "c", function () {
          return C;
        }),
        a.d(t, "D", function () {
          return A;
        }),
        a.d(t, "F", function () {
          return U;
        }),
        a.d(t, "E", function () {
          return P;
        }),
        a.d(t, "l", function () {
          return I;
        }),
        a.d(t, "k", function () {
          return T;
        }),
        a.d(t, "j", function () {
          return N;
        }),
        a.d(t, "h", function () {
          return y;
        }),
        a.d(t, "i", function () {
          return F;
        }),
        a.d(t, "m", function () {
          return V;
        }),
        a.d(t, "n", function () {
          return D;
        }),
        a.d(t, "I", function () {
          return k;
        }),
        a.d(t, "K", function () {
          return w;
        }),
        a.d(t, "J", function () {
          return M;
        }),
        a.d(t, "H", function () {
          return x;
        }),
        a.d(t, "R", function () {
          return G;
        }),
        a.d(t, "O", function () {
          return z;
        }),
        a.d(t, "N", function () {
          return K;
        }),
        a.d(t, "a", function () {
          return H;
        }),
        a.d(t, "M", function () {
          return W;
        }),
        a.d(t, "G", function () {
          return B;
        }),
        a.d(t, "Q", function () {
          return q;
        }),
        a.d(t, "r", function () {
          return Q;
        }),
        a.d(t, "C", function () {
          return Y;
        });
      var n = "LOGIN_USER",
        r = "LOGIN_USER_SUCCESS",
        c = "LOGIN_USER_FAILURE",
        o = "LOGOUT_USER",
        i = "REGISTER_USER",
        u = "REGISTER_USER_SUCCESS",
        s = "REGISTER_USER_FAILURE",
        l = "CHECK_USER",
        d = "CHECK_USER_SUCCESS",
        O = "CHECK_USER_FAILURE",
        b = "VALIDATE_NTSA_NUMBER",
        j = "VALIDATE_ALIEN_NUMBER",
        E = "VERIFY_OTP",
        m = "VERIFY_OTP_SUCCESS",
        p = "VERIFY_OTP_FAILURE",
        S = "REQUEST_OTP",
        f = "REQUEST_OTP_SUCCESS",
        g = "REQUEST_OTP_FAILURE",
        L = "FETCH_PROFILE",
        v = "FETCH_PROFILE_SUCCESS",
        _ = "FETCH_PROFILE_FAILURE",
        h = "CHANGE_PASSWORD",
        R = "CHANGE_PASSWORD_SUCCESS",
        C = "CHANGE_PASSWORD_FAILURE",
        A = "RESET_PASSWORD",
        U = "RESET_PASSWORD_SUCCESS",
        P = "RESET_PASSWORD_FAILURE",
        I = "CLEAR_REGISTER_USER",
        T = "CLEAR_OTP",
        N = "CLEAR_LOGIN_USER",
        y = "CLEAR_CHANGE_PASSWORD",
        F = "CLEAR_CHECK_USER",
        V = "CLEAR_RESET_PASSWORD",
        D = "CLEAR_UPDATE_PROFILE",
        k = "UPDATE_PROFILE",
        w = "UPDATE_PROFILE_SUCCESS",
        M = "UPDATE_PROFILE_FAILURE",
        x = "SET_PROFILE_IMAGE",
        G = "VALIDATE_SERIAL_NUMBER",
        z = "VALIDATE_MAIDEN_NAME",
        K = "VALIDATE_KRA_PIN",
        H = "CHANGE_MOBILE_NUMBER",
        W = "VALIDATE_COMPANY_KRA_PIN",
        B = "SEND_VERIFICATION_EMAIL",
        q = "VALIDATE_PASSCODE",
        Q = "GET_PROFESSIONAL_TYPES",
        Y = "REQUEST_PASS_RESET_CODE";
    },
    58: function (e, t, a) {
      "use strict";
      var n = a(4),
        r = a(5),
        c = a(85),
        o = a.n(c),
        i = (function () {
          function e() {
            Object(n.a)(this, e);
          }
          return (
            Object(r.a)(e, null, [
              {
                key: "decodeToken",
                value: function () {
                  var e = localStorage.getItem("token");
                  return e ? o()(e) : null;
                },
              },
              {
                key: "isExpired",
                value: function (e) {
                  if (e) {
                    var t = new Date();
                    return Math.floor(0.001 * t.getTime()) > e;
                  }
                  return !1;
                },
              },
            ]),
            e
          );
        })();
      (i.logoutUser = function (e, t) {
        localStorage.removeItem("token"),
          e.push("/login"),
          t && console.log(t),
          t || localStorage.removeItem("url");
      }),
        (i.isTokenExpired = function () {
          try {
            var e = localStorage.getItem("token"),
              t = o()(e),
              a = new Date().getTime();
            return !(t && t.exp && 1e3 * t.exp <= a);
          } catch (n) {
            return !1;
          }
        }),
        (i.isLoggedIn = function (e) {
          return i.isTokenExpired() || e.isAuthenticated;
        }),
        (t.a = i);
    },
  },
  [[146, 5, 6]],
]);
