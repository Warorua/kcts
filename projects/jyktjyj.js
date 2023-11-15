/*! For license information please see 9.db4bf549.chunk.js.LICENSE.txt */
(this["webpackJsonpe-constructions-portal-auth"] =
  this["webpackJsonpe-constructions-portal-auth"] || []).push([
  [9],
  {
    212: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return a;
      }),
        n.d(t, "c", function () {
          return r;
        }),
        n.d(t, "f", function () {
          return o;
        }),
        n.d(t, "g", function () {
          return i;
        }),
        n.d(t, "b", function () {
          return c;
        }),
        n.d(t, "d", function () {
          return l;
        }),
        n.d(t, "e", function () {
          return u;
        });
      var a = /^[0-9]{1,9}$/,
        r = /^[A-Z0-9]{7,9}$/,
        o = /[ `!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?~]/,
        i = /[A-Z]/,
        c = /[0-9]/,
        l = "^(?:254|\\+254|0)?([0-9](?:(?:[0-9][0-9])|(?:0[0-8]))[0-9]{6})$",
        u =
          "Phone number must be in format +2547******** or 2547******** or 07******** or 7********";
    },
    214: function (e, t, n) {
      "use strict";
      n.d(t, "e", function () {
        return r;
      }),
        n.d(t, "a", function () {
          return o;
        }),
        n.d(t, "d", function () {
          return i;
        }),
        n.d(t, "b", function () {
          return c;
        }),
        n.d(t, "c", function () {
          return l;
        });
      n(741), n(743), n(1);
      var a = n(212),
        r =
          (n(249),
          n(250),
          n(251),
          function (e) {
            return "".concat(e);
          }),
        o = function (e) {
          if (e) {
            var t,
              n,
              a,
              r,
              o,
              i,
              c =
                null === e || void 0 === e
                  ? void 0
                  : e.split(" ").filter(function (e) {
                      return e && "" !== e;
                    }),
              l = { firstName: c[0], middleName: c[1], lastName: c[2] },
              u = null === l || void 0 === l ? void 0 : l.firstName,
              s =
                null === l ||
                void 0 === l ||
                null === (t = l.middleName) ||
                void 0 === t
                  ? void 0
                  : t.replace(
                      null === l ||
                        void 0 === l ||
                        null === (n = l.middleName) ||
                        void 0 === n
                        ? void 0
                        : n.substring(1),
                      "*".repeat(
                        (null === l ||
                        void 0 === l ||
                        null === (a = l.middleName) ||
                        void 0 === a
                          ? void 0
                          : a.length) - 1
                      )
                    ),
              d =
                null === l ||
                void 0 === l ||
                null === (r = l.lastName) ||
                void 0 === r
                  ? void 0
                  : r.replace(
                      null === l ||
                        void 0 === l ||
                        null === (o = l.lastName) ||
                        void 0 === o
                        ? void 0
                        : o.substring(1),
                      "*".repeat(
                        (null === l ||
                        void 0 === l ||
                        null === (i = l.lastName) ||
                        void 0 === i
                          ? void 0
                          : i.length) - 1
                      )
                    );
            return ""
              .concat(u || "", " ")
              .concat(s || "", "  ")
              .concat(d || "");
          }
        },
        i = function (e) {
          var t = a.f.test(String(e)),
            n = a.b.test(String(e)),
            r = a.g.test(String(e));
          return e &&
            (null === e || void 0 === e ? void 0 : e.length) > 6 &&
            t &&
            n &&
            r
            ? { strength: 2, message: "Password is strong" }
            : e &&
              (null === e || void 0 === e ? void 0 : e.length) >= 6 &&
              (t || n || a.g)
            ? { strength: 1, message: "Password has medium strength" }
            : e && (null === e || void 0 === e ? void 0 : e.length) < 6
            ? { strength: 0, message: "Password is weak" }
            : void 0;
        },
        c = function (e) {
          var t = null === e || void 0 === e ? void 0 : e.replace(/\s/g, "");
          if (t) {
            if ("07" === t.substring(0, 2))
              return t.replace(
                t.substring(3, 8),
                "*".repeat(t.substring(3, 8).length)
              );
            if ("+254" === t.substring(0, 4))
              return t.replace(
                t.substring(6, 11),
                "*".repeat(t.substring(6, 11).length)
              );
            if ("254" === t.substring(0, 3))
              return t.replace(
                t.substring(5, 10),
                "*".repeat(t.substring(5, 10).length)
              );
            if ("7" === t.substring(0, 1))
              return t.replace(
                t.substring(2, 7),
                "*".repeat(t.substring(2, 7).length)
              );
          }
        },
        l = function (e) {
          if (e) {
            for (
              var t = "",
                n =
                  null === e || void 0 === e
                    ? void 0
                    : e.substring(
                        0,
                        null === e || void 0 === e ? void 0 : e.lastIndexOf("@")
                      ),
                a =
                  null === e || void 0 === e
                    ? void 0
                    : e.substring(
                        null === e || void 0 === e ? void 0 : e.lastIndexOf("@")
                      ),
                r = 0;
              r < n.length;
              r++
            )
              0 === r && 1 === n.length
                ? (t = "*")
                : 0 === r || (r === n.length - 1 && n.length > 2)
                ? (t += n[r].toString())
                : (t += "*");
            return t + a;
          }
        };
    },
    219: function (e, t, n) {
      "use strict";
      var a = n(11),
        r = n(87),
        o = n(1),
        i = n.n(o),
        c = n(427),
        l = n(224),
        u = [
          "type",
          "placeholder",
          "required",
          "labelTitle",
          "labelFor",
          "children",
          "className",
          "name",
          "id",
          "validate",
          "helpText",
        ];
      t.a = function (e) {
        var t = e.type,
          n = e.placeholder,
          s = e.required,
          d = e.labelTitle,
          m = (e.labelFor, e.children),
          p = e.className,
          f = e.name,
          v = e.id,
          b = e.validate,
          h = e.helpText,
          g = Object(r.a)(e, u),
          E = Object(o.useState)(!1),
          y = Object(a.a)(E, 2),
          N = y[0],
          O = y[1],
          _ = function (e) {
            var t = document.getElementById(e);
            O(!N),
              "password" === t.type ? (t.type = "text") : (t.type = "password");
          };
        return i.a.createElement(
          l.AvGroup,
          { className: "form-group position-relative" },
          d &&
            v &&
            i.a.createElement(
              c.a,
              { for: v, id: v },
              d,
              " ",
              s && i.a.createElement("span", { className: "text-danger" }, "*")
            ),
          "password" === t &&
            N &&
            i.a.createElement("i", {
              onClick: function () {
                return _(v);
              },
              className: "mdi mdi-eye ml-3 passWordIcons",
            }),
          "password" === t &&
            !N &&
            i.a.createElement("i", {
              onClick: function () {
                return _(v);
              },
              className: "mdi mdi-eye-off ml-3 passWordIcons",
            }),
          m,
          i.a.createElement(
            l.AvField,
            Object.assign(
              {
                type: t,
                className: [p].join(" "),
                name: f,
                id: v,
                placeholder: n,
                required: s,
                errorMessage: "",
                validate: b,
              },
              g
            )
          ),
          h &&
            i.a.createElement(
              c.a,
              {
                style: { top: -20, position: "relative" },
                className: "helpText",
              },
              h
            )
        );
      };
    },
    220: function (e, t, n) {
      "use strict";
      var a = n(87),
        r = n(1),
        o = n.n(r),
        i = n(296),
        c = n(196),
        l = ["isLoading", "type", "title", "disabled"];
      t.a = function (e) {
        var t = e.isLoading,
          n = e.type,
          r = e.title,
          u = e.disabled,
          s = Object(a.a)(e, l);
        return o.a.createElement(
          i.a,
          Object.assign({}, s, {
            className: "btn ".concat(n || "btn-primary ", " w-45"),
            disabled: !(!t && !u),
          }),
          !t && e.children,
          " ",
          t ? o.a.createElement(c.a, null) : r
        );
      };
    },
    222: function (e, t, n) {
      "use strict";
      n.d(t, "v", function () {
        return r;
      }),
        n.d(t, "x", function () {
          return o;
        }),
        n.d(t, "w", function () {
          return i;
        }),
        n.d(t, "y", function () {
          return c;
        }),
        n.d(t, "z", function () {
          return l;
        }),
        n.d(t, "B", function () {
          return u;
        }),
        n.d(t, "A", function () {
          return s;
        }),
        n.d(t, "g", function () {
          return d;
        }),
        n.d(t, "i", function () {
          return m;
        }),
        n.d(t, "h", function () {
          return p;
        }),
        n.d(t, "kb", function () {
          return f;
        }),
        n.d(t, "mb", function () {
          return v;
        }),
        n.d(t, "lb", function () {
          return b;
        }),
        n.d(t, "C", function () {
          return h;
        }),
        n.d(t, "E", function () {
          return g;
        }),
        n.d(t, "D", function () {
          return E;
        }),
        n.d(t, "p", function () {
          return y;
        }),
        n.d(t, "r", function () {
          return N;
        }),
        n.d(t, "q", function () {
          return O;
        }),
        n.d(t, "P", function () {
          return _;
        }),
        n.d(t, "R", function () {
          return P;
        }),
        n.d(t, "Q", function () {
          return j;
        }),
        n.d(t, "I", function () {
          return C;
        }),
        n.d(t, "K", function () {
          return w;
        }),
        n.d(t, "J", function () {
          return S;
        }),
        n.d(t, "a", function () {
          return x;
        }),
        n.d(t, "c", function () {
          return L;
        }),
        n.d(t, "b", function () {
          return T;
        }),
        n.d(t, "n", function () {
          return A;
        }),
        n.d(t, "m", function () {
          return k;
        }),
        n.d(t, "l", function () {
          return I;
        }),
        n.d(t, "j", function () {
          return R;
        }),
        n.d(t, "k", function () {
          return D;
        }),
        n.d(t, "o", function () {
          return U;
        }),
        n.d(t, "hb", function () {
          return F;
        }),
        n.d(t, "jb", function () {
          return M;
        }),
        n.d(t, "ib", function () {
          return q;
        }),
        n.d(t, "S", function () {
          return K;
        }),
        n.d(t, "U", function () {
          return V;
        }),
        n.d(t, "T", function () {
          return G;
        }),
        n.d(t, "bb", function () {
          return W;
        }),
        n.d(t, "db", function () {
          return H;
        }),
        n.d(t, "cb", function () {
          return B;
        }),
        n.d(t, "Y", function () {
          return z;
        }),
        n.d(t, "ab", function () {
          return Y;
        }),
        n.d(t, "Z", function () {
          return Z;
        }),
        n.d(t, "d", function () {
          return J;
        }),
        n.d(t, "f", function () {
          return Q;
        }),
        n.d(t, "e", function () {
          return $;
        }),
        n.d(t, "O", function () {
          return X;
        }),
        n.d(t, "V", function () {
          return ee;
        }),
        n.d(t, "X", function () {
          return te;
        }),
        n.d(t, "W", function () {
          return ne;
        }),
        n.d(t, "L", function () {
          return ae;
        }),
        n.d(t, "N", function () {
          return re;
        }),
        n.d(t, "M", function () {
          return oe;
        }),
        n.d(t, "eb", function () {
          return ie;
        }),
        n.d(t, "gb", function () {
          return ce;
        }),
        n.d(t, "fb", function () {
          return le;
        }),
        n.d(t, "s", function () {
          return ue;
        }),
        n.d(t, "u", function () {
          return se;
        }),
        n.d(t, "t", function () {
          return de;
        }),
        n.d(t, "F", function () {
          return me;
        }),
        n.d(t, "H", function () {
          return pe;
        }),
        n.d(t, "G", function () {
          return fe;
        });
      var a = n(3),
        r = function () {
          return { type: a.s };
        },
        o = function (e) {
          return { type: a.u, response: e };
        },
        i = function (e) {
          return { type: a.t, error: e };
        },
        c = function () {
          return { type: a.v };
        },
        l = function () {
          return { type: a.w };
        },
        u = function (e) {
          return { type: a.y, response: e };
        },
        s = function (e) {
          return { type: a.x, error: e };
        },
        d = function () {
          return { type: a.e };
        },
        m = function (e) {
          return { type: a.g, response: e };
        },
        p = function (e) {
          return { type: a.f, error: e };
        },
        f = function () {
          return { type: a.S };
        },
        v = function (e) {
          return { type: a.U, response: e };
        },
        b = function (e) {
          return { type: a.T, error: e };
        },
        h = function () {
          return { type: a.z };
        },
        g = function (e) {
          return { type: a.B, response: e };
        },
        E = function (e) {
          return { type: a.A, error: e };
        },
        y = function () {
          return { type: a.o };
        },
        N = function (e) {
          return { type: a.q, response: e };
        },
        O = function (e) {
          return { type: a.p, error: e };
        },
        _ = function () {
          return { type: a.I };
        },
        P = function (e) {
          return { type: a.K, response: e };
        },
        j = function (e) {
          return { type: a.J, error: e };
        },
        C = function () {
          return { type: a.D };
        },
        w = function (e) {
          return { type: a.F, response: e };
        },
        S = function (e) {
          return { type: a.E, error: e };
        },
        x = function () {
          return { type: a.P };
        },
        L = function (e) {
          return { type: "".concat(a.P, "_SUCCESS"), response: e };
        },
        T = function (e) {
          return { type: "".concat(a.P, "_FAILURE"), error: e };
        },
        A = function () {
          return { type: a.l };
        },
        k = function () {
          return { type: a.k };
        },
        I = function () {
          return { type: a.j };
        },
        R = function () {
          return { type: a.h };
        },
        D = function () {
          return { type: a.i };
        },
        U = function () {
          return { type: a.m };
        },
        F = function () {
          return { type: a.R };
        },
        M = function (e) {
          return { type: "".concat(a.R, "_SUCCESS"), response: e };
        },
        q = function (e) {
          return { type: "".concat(a.R, "_FAILURE"), error: e };
        },
        K = function () {
          return { type: a.L };
        },
        V = function (e) {
          return { type: "".concat(a.L, "_SUCCESS"), response: e };
        },
        G = function (e) {
          return { type: "".concat(a.L, "_FAILURE"), error: e };
        },
        W = function () {
          return { type: a.O };
        },
        H = function (e) {
          return { type: "".concat(a.O, "_SUCCESS"), response: e };
        },
        B = function (e) {
          return { type: "".concat(a.O, "_FAILURE"), error: e };
        },
        z = function () {
          return { type: a.N };
        },
        Y = function (e) {
          return { type: "".concat(a.N, "_SUCCESS"), response: e };
        },
        Z = function (e) {
          return { type: "".concat(a.N, "_FAILURE"), error: e };
        },
        J = function () {
          return { type: a.a };
        },
        Q = function (e) {
          return { type: "".concat(a.a, "_SUCCESS"), response: e };
        },
        $ = function (e) {
          return { type: "".concat(a.a, "_FAILURE"), error: e };
        },
        X = function (e) {
          return { type: "SET_ACTIVE_MENU", menuType: e };
        },
        ee = function () {
          return { type: a.M };
        },
        te = function (e) {
          return { type: "".concat(a.M, "_SUCCESS"), response: e };
        },
        ne = function (e) {
          return { type: "".concat(a.M, "_FAILURE"), error: e };
        },
        ae = function () {
          return { type: a.G };
        },
        re = function (e) {
          return { type: "".concat(a.G, "_SUCCESS"), response: e };
        },
        oe = function (e) {
          return { type: "".concat(a.G, "_FAILURE"), error: e };
        },
        ie = function () {
          return { type: a.Q };
        },
        ce = function (e) {
          return { type: "".concat(a.Q, "_SUCCESS"), response: e };
        },
        le = function (e) {
          return { type: "".concat(a.Q, "_FAILURE"), error: e };
        },
        ue = function () {
          return { type: a.r };
        },
        se = function (e) {
          return { type: "".concat(a.r, "_SUCCESS"), response: e };
        },
        de = function (e) {
          return { type: "".concat(a.r, "_FAILURE"), error: e };
        },
        me = function () {
          return { type: a.C };
        },
        pe = function (e) {
          return { type: "".concat(a.C, "_SUCCESS"), response: e };
        },
        fe = function (e) {
          return { type: "".concat(a.C, "_FAILURE"), error: e };
        };
    },
    237: function (e, t, n) {
      "use strict";
      var a = {
        REACT_APP_AUTH_URL: "/api/edev",
        REACT_APP_API_PARKING_URL: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_API_PARKING_URL,
        REACT_APP_LANDS_URL: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_LANDS_URL,
        REACT_APP_LANDS_APPLICATION_URL: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_LANDS_APPLICATION_URL,
        REACT_APP_SERVICES_APPLIED: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_SERVICES_APPLIED,
        REACT_APP_SBP_RECORDS: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_SBP_RECORDS,
        REACT_APP_ADMIN_PARKING: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_ADMIN_PARKING,
        REACT_APP_MARKETS: Object({
          NODE_ENV: "production",
          PUBLIC_URL: "",
          WDS_SOCKET_HOST: void 0,
          WDS_SOCKET_PATH: void 0,
          WDS_SOCKET_PORT: void 0,
          REACT_APP_AUTH_URL: "/api/edev",
          REACT_APP_SENTRY:
            "https://b564d539dc224e709f17210d1ecda118@edev.nairobiservices.go.ke/api/sentry/28",
        }).REACT_APP_MARKETS,
      };
      t.a = a;
    },
    238: function (e, t, n) {
      "use strict";
      t.a = function (e) {
        var t, n, a, r, o, i, c, l, u, s, d, m, p;
        e.response
          ? (t =
              e.response.data.description ||
              (null === (n = e.response.data.error) || void 0 === n
                ? void 0
                : n.description) ||
              (null === (a = e.response.data) || void 0 === a
                ? void 0
                : a.error) ||
              (null === (r = e.response.data) || void 0 === r
                ? void 0
                : r.error_message) ||
              (null === (o = e.response.data) || void 0 === o
                ? void 0
                : o.message) ||
              (null === (i = e.response.data) ||
              void 0 === i ||
              null === (c = i.data) ||
              void 0 === c
                ? void 0
                : c.description) ||
              (null === (l = e.response.data) || void 0 === l
                ? void 0
                : l.data) ||
              (null === (u = e.response.data) || void 0 === u
                ? void 0
                : u.customer_email) ||
              (null === (s = e.response.data.error) || void 0 === s
                ? void 0
                : s.password1) ||
              (null === (d = e.response.data.error) || void 0 === d
                ? void 0
                : d.password2) ||
              ((
                null === (m = e.response.data) || void 0 === m
                  ? void 0
                  : m.non_field_errors
              )
                ? null === (p = e.response.data) || void 0 === p
                  ? void 0
                  : p.non_field_errors[0]
                : "An error ocurred performing this request"))
          : (t = "Error processing your request, please try later");
        return t || "Possible server error.";
      };
    },
    249: function (e, t, n) {
      e.exports = n.p + "static/media/car.1e2614ee.svg";
    },
    250: function (e, t, n) {
      e.exports = n.p + "static/media/land.70bdfb6f.svg";
    },
    251: function (e, t, n) {
      e.exports = n.p + "static/media/permits.5ca34772.svg";
    },
    305: function (e, t, n) {
      "use strict";
      var a = n(0),
        r = n(87),
        o = n(1),
        i = n.n(o),
        c = n(448),
        l = n(427),
        u = n(219),
        s = n(444),
        d = n(364),
        m = n.n(d),
        p = [
          "handleSelectChange",
          "options",
          "placeholder",
          "label",
          "labelId",
          "selectedValue",
          "required",
          "requiredError",
          "isCreatableSelect",
        ];
      t.a = function (e) {
        var t = e.handleSelectChange,
          n = e.options,
          o = e.placeholder,
          d = e.label,
          f = e.labelId,
          v = e.selectedValue,
          b = e.required,
          h = e.requiredError,
          g = e.isCreatableSelect,
          E = Object(r.a)(e, p),
          y = {
            control: function (e) {
              return Object(a.a)(
                Object(a.a)({}, e),
                {},
                {
                  borderRadius: "10px",
                  boxShadow: "none",
                  "&:hover": { border: "1px solid #0a4e1d" },
                  "&:active": { border: "1px solid #0a4e1d" },
                }
              );
            },
            menu: function (e) {
              return Object(a.a)(Object(a.a)({}, e), {}, { zIndex: 1e3 });
            },
          };
        return i.a.createElement(
          i.a.Fragment,
          null,
          d &&
            i.a.createElement(l.a, { for: f, className: m.a.selectLabels }, d),
          g
            ? i.a.createElement(
                s.a,
                Object.assign(
                  {
                    onChange: t,
                    options: n,
                    hideSelectedOptions: !0,
                    placeholder: o,
                    className: m.a.selectComponent,
                    styles: y,
                    theme: function (e) {
                      return Object(a.a)(
                        Object(a.a)({}, e),
                        {},
                        {
                          colors: Object(a.a)(
                            Object(a.a)({}, e.colors),
                            {},
                            {
                              primary25: "#bfdbc7",
                              primary50: "#99c9a7",
                              primary: "#0a4e1d",
                            }
                          ),
                        }
                      );
                    },
                  },
                  E
                )
              )
            : i.a.createElement(
                c.a,
                Object.assign(
                  {
                    onChange: t,
                    options: n,
                    hideSelectedOptions: !0,
                    placeholder: o,
                    className: m.a.selectComponent,
                    styles: y,
                    theme: function (e) {
                      return Object(a.a)(
                        Object(a.a)({}, e),
                        {},
                        {
                          colors: Object(a.a)(
                            Object(a.a)({}, e.colors),
                            {},
                            {
                              primary25: "#bfdbc7",
                              primary50: "#99c9a7",
                              primary: "#0a4e1d",
                            }
                          ),
                        }
                      );
                    },
                  },
                  E
                )
              ),
          i.a.createElement(u.a, {
            required: b,
            type: "text",
            className: "form-control pl-5 m-0 d-none",
            name: f,
            onChange: t,
            id: f,
            value: v,
            placeholder: o,
            validate: { required: { value: !0, errorMessage: h } },
          })
        );
      };
    },
    310: function (e, t, n) {
      "use strict";
      var a = n(11),
        r = n(1),
        o = n.n(r),
        i = n(282),
        c = n(354),
        l = n(428),
        u = n(355),
        s = n(281),
        d = n(224),
        m = n(214),
        p = n(220),
        f = n(219);
      t.a = function (e) {
        var t = e.OTPError,
          n = e.phoneNumber,
          v = e.handleVerifyOTP,
          b = e.handleChange,
          h = e.isLoading,
          g = e.isSuccessFull,
          E = e.children,
          y = e.id,
          N = e.cancelOtpPage,
          O = e.handleResendOTP,
          _ = Object(r.useState)(120),
          P = Object(a.a)(_, 2),
          j = P[0],
          C = P[1],
          w = Object(r.useState)(!1),
          S = Object(a.a)(w, 2),
          x = S[0],
          L = S[1];
        return (
          Object(r.useEffect)(
            function () {
              var e =
                j > 0 &&
                setInterval(function () {
                  return C(j - 1);
                }, 1e3);
              return function () {
                return clearInterval(e);
              };
            },
            [j]
          ),
          o.a.createElement(
            o.a.Fragment,
            null,
            o.a.createElement("h5", { className: "mb-4" }, "Verify OTP Code"),
            o.a.createElement(
              "p",
              null,
              "We have sent you an SMS with a verification code(OTP) on:"
            ),
            o.a.createElement(
              i.a,
              { xs: 12, className: "mb-4 p-0 text-center" },
              o.a.createElement("strong", null, Object(m.b)(n)),
              o.a.createElement("i", {
                id: "infoIcon",
                className: "mdi mdi-information-outline pl-5",
              })
            ),
            o.a.createElement(
              c.a,
              {
                placement: "right",
                isOpen: x,
                target: "infoIcon",
                toggle: function () {
                  return L(!x);
                },
              },
              "We have sent an OTP code to this number for verification."
            ),
            o.a.createElement(
              "div",
              { className: "text-center" },
              t && o.a.createElement(l.a, { color: "danger" }, t),
              g && o.a.createElement(u.a, { color: "success" }, E)
            ),
            o.a.createElement(
              d.AvForm,
              { className: "login-form", onSubmit: v },
              o.a.createElement(
                s.a,
                null,
                o.a.createElement(
                  i.a,
                  { lg: "12" },
                  o.a.createElement(
                    f.a,
                    {
                      labelFor: "email",
                      label: "Enter verification code",
                      required: !0,
                      type: "text",
                      tabIndex: 1,
                      className: "form-control pl-5",
                      name: "loginOtp",
                      id: y,
                      autoFocus: !0,
                      onChange: b,
                      placeholder: "Enter OTP code",
                      validate: {
                        required: {
                          value: !0,
                          errorMessage: "Please enter your OTP code",
                        },
                      },
                    },
                    o.a.createElement("i", {
                      className: "mdi mdi-lock-open ml-3 icons",
                    })
                  )
                ),
                o.a.createElement(
                  i.a,
                  { lg: "12", className: "mb-0" },
                  o.a.createElement(
                    p.a,
                    { title: "Verify Code", isLoading: h, tabIndex: 2 },
                    o.a.createElement("i", { className: "mdi mdi-lock-open" })
                  )
                ),
                o.a.createElement(
                  i.a,
                  { lg: 12 },
                  o.a.createElement(
                    s.a,
                    null,
                    o.a.createElement(
                      i.a,
                      { xs: "12", className: "text-center", tabIndex: 3 },
                      o.a.createElement(
                        "p",
                        { className: "mb-0 mt-3" },
                        0 === j &&
                          o.a.createElement(
                            "small",
                            { className: "text-dark mr-2" },
                            "Didn't receive code?"
                          ),
                        0 !== j &&
                          o.a.createElement(
                            "small",
                            { className: "text-dark mr-2" },
                            "Resend OTP after:"
                          ),
                        0 === j &&
                          o.a.createElement(
                            "span",
                            {
                              onClick: function () {
                                O(), C(120);
                              },
                              className: "text-dark font-weight-bold",
                              style: { cursor: "pointer" },
                            },
                            "Resend code"
                          ),
                        0 !== j && j
                      )
                    ),
                    o.a.createElement(
                      i.a,
                      { xs: "12", className: "text-center" },
                      o.a.createElement(
                        "div",
                        { className: "mb-0 mt-3" },
                        o.a.createElement(
                          "p",
                          {
                            onClick: N,
                            tabIndex: 4,
                            className: "text-dark font-weight-bold",
                            style: { cursor: "pointer" },
                          },
                          "Click to go back"
                        )
                      )
                    )
                  )
                )
              )
            )
          )
        );
      };
    },
    311: function (e, t, n) {
      e.exports = n.p + "static/media/company.1ecb281a.svg";
    },
    312: function (e, t, n) {
      e.exports = {
        authIcons: "Signup_authIcons__3cmKZ",
        accountSelect: "Signup_accountSelect__3-QMb",
        selected: "Signup_selected__1FI-D",
        loginContainer: "Signup_loginContainer__3XDJp",
        orSwitcher: "Signup_orSwitcher__3-hrw",
      };
    },
    313: function (e, t, n) {
      "use strict";
      var a = n(1),
        r = n.n(a),
        o = n(247),
        i = n(281),
        c = n(282);
      t.a = function (e) {
        return r.a.createElement(
          r.a.Fragment,
          null,
          r.a.createElement(
            "section",
            {
              className:
                "auth-page_wrapper d-flex  h-100  justify-content-center",
            },
            r.a.createElement(
              o.a,
              null,
              r.a.createElement(
                i.a,
                {
                  className: "authContainer shadow ".concat(
                    e.customStylesClass
                  ),
                  style: { marginTop: "10rem" },
                },
                r.a.createElement(c.a, {
                  xs: 12,
                  md: 12,
                  lg: 5,
                  className:
                    "p-0 form-sider d-none d-md-none d-lg-block auth-form-sider",
                  style: {
                    backgroundImage: "url(".concat(e.sideImage, ")"),
                    backgroundColor: "rgba(7, 137, 48, 0.5)",
                    backgroundBlendMode: "multiply",
                    backgroundRepeat: "no-repeat",
                    width: "auto",
                  },
                }),
                r.a.createElement(
                  c.a,
                  { xs: 12, md: 12, lg: 7, className: "form-area p-5" },
                  e.children
                )
              ),
              r.a.createElement(
                "h1",
                { className: "text-center", style: { color: "#336856" } },
                "Let's make Nairobi work"
              )
            )
          )
        );
      };
    },
    364: function (e, t, n) {
      e.exports = {
        selectLabels: "Select_selectLabels__35RFL",
        selectComponent: "Select_selectComponent__37pHe",
        expiry: "Select_expiry__37-fk",
        input: "Select_input__165co",
      };
    },
    449: function (e, t, n) {
      e.exports = n.p + "static/media/signup.22ebf290.png";
    },
    450: function (e, t, n) {
      e.exports = n.p + "static/media/individual.a7244c11.svg";
    },
    742: function (e, t, n) {
      "use strict";
      n.r(t);
      var a = n(1),
        r = n.n(a),
        o = n(54),
        i = n(40),
        c = n(0),
        l = n(11),
        u = n(282),
        s = n(281),
        d = n(354),
        m = n(428),
        p = n(196),
        f = n(224),
        v = n(15),
        b = n(53),
        h = n(214),
        g = n(220),
        E = n(461),
        y = n(424),
        N = n(425),
        O = n(426),
        _ = n(296),
        P = function (e) {
          return { type: "OPEN_MODAL", data: e };
        },
        j = function (e) {
          var t = e.cancelButtonName,
            n = e.actionButtonName,
            a = e.closeOnOverlayClick,
            i = e.showModal,
            c = e.modalTitle,
            l = e.modalBody,
            u = e.handleSuccessClick,
            s = e.showFooter,
            d = Object(o.useDispatch)(),
            m = Object(o.useSelector)(function (e) {
              return e.modal.shouldOpen;
            }),
            p = function () {
              m && d({ type: "CLOSE_MODAL" });
            };
          return r.a.createElement(
            E.a,
            { isOpen: i, toggle: a && p, centered: !0 },
            c && r.a.createElement(y.a, null, c),
            r.a.createElement(N.a, null, l),
            s &&
              r.a.createElement(
                O.a,
                null,
                r.a.createElement(
                  _.a,
                  { outline: !0, color: "primary rounded-pill", onClick: p },
                  r.a.createElement("i", { className: "mdi mdi-close " }),
                  t || "Cancel"
                ),
                n &&
                  r.a.createElement(
                    _.a,
                    {
                      id: "gradient-button",
                      className: "rounded-pill",
                      onClick: u,
                    },
                    n
                  )
              )
          );
        },
        C = n(219),
        w = n(305),
        S = n(313),
        x = n(310),
        L = n(449),
        T = n.n(L),
        A = (n(311), n(450), n(312)),
        k = n.n(A),
        I = n(427),
        R = function (e) {
          var t = e.fullName,
            n = e.onContinue,
            a = e.regDocNumber,
            o = e.isLoading,
            i = e.phoneNumber,
            c = e.handleChangeNumber;
          return r.a.createElement(
            "div",
            { className: "bg-white text-center" },
            r.a.createElement(
              "p",
              { className: "text-muted" },
              "Continue to register account for?"
            ),
            r.a.createElement(I.a, { for: "name" }, "Name: "),
            r.a.createElement("h5", null, Object(h.a)(t)),
            r.a.createElement(I.a, { for: "idNumber" }, "KRA PIN:"),
            r.a.createElement("h5", null, a),
            r.a.createElement(
              "p",
              null,
              "We will send you an SMS with a verification code(OTP) on:"
            ),
            r.a.createElement(
              u.a,
              { xs: 12, className: "mb-4 p-0 text-center" },
              r.a.createElement(
                "strong",
                null,
                Object(h.b)(i) || "No mobile number found"
              ),
              r.a.createElement(
                "span",
                { className: "pl-5 text-link", onClick: c },
                r.a.createElement(
                  b.b,
                  null,
                  "change number? ",
                  r.a.createElement("i", { className: "mdi mdi-pencil icons" })
                )
              )
            ),
            r.a.createElement(
              s.a,
              null,
              r.a.createElement(
                u.a,
                { lg: "12", className: "mb-0 mt-3" },
                r.a.createElement(g.a, {
                  title: "Continue",
                  isLoading: o,
                  onClick: n,
                })
              )
            )
          );
        },
        D = n(248),
        U = n(65),
        F = n.n(U),
        M = n(238),
        q = n(237),
        K = n(222);
      function V() {
        V = function () {
          return e;
        };
        var e = {},
          t = Object.prototype,
          n = t.hasOwnProperty,
          a =
            Object.defineProperty ||
            function (e, t, n) {
              e[t] = n.value;
            },
          r = "function" == typeof Symbol ? Symbol : {},
          o = r.iterator || "@@iterator",
          i = r.asyncIterator || "@@asyncIterator",
          c = r.toStringTag || "@@toStringTag";
        function l(e, t, n) {
          return (
            Object.defineProperty(e, t, {
              value: n,
              enumerable: !0,
              configurable: !0,
              writable: !0,
            }),
            e[t]
          );
        }
        try {
          l({}, "");
        } catch (S) {
          l = function (e, t, n) {
            return (e[t] = n);
          };
        }
        function u(e, t, n, r) {
          var o = t && t.prototype instanceof m ? t : m,
            i = Object.create(o.prototype),
            c = new j(r || []);
          return a(i, "_invoke", { value: N(e, n, c) }), i;
        }
        function s(e, t, n) {
          try {
            return { type: "normal", arg: e.call(t, n) };
          } catch (S) {
            return { type: "throw", arg: S };
          }
        }
        e.wrap = u;
        var d = {};
        function m() {}
        function p() {}
        function f() {}
        var v = {};
        l(v, o, function () {
          return this;
        });
        var b = Object.getPrototypeOf,
          h = b && b(b(C([])));
        h && h !== t && n.call(h, o) && (v = h);
        var g = (f.prototype = m.prototype = Object.create(v));
        function E(e) {
          ["next", "throw", "return"].forEach(function (t) {
            l(e, t, function (e) {
              return this._invoke(t, e);
            });
          });
        }
        function y(e, t) {
          var r;
          a(this, "_invoke", {
            value: function (a, o) {
              function i() {
                return new t(function (r, i) {
                  !(function a(r, o, i, c) {
                    var l = s(e[r], e, o);
                    if ("throw" !== l.type) {
                      var u = l.arg,
                        d = u.value;
                      return d && "object" == typeof d && n.call(d, "__await")
                        ? t.resolve(d.__await).then(
                            function (e) {
                              a("next", e, i, c);
                            },
                            function (e) {
                              a("throw", e, i, c);
                            }
                          )
                        : t.resolve(d).then(
                            function (e) {
                              (u.value = e), i(u);
                            },
                            function (e) {
                              return a("throw", e, i, c);
                            }
                          );
                    }
                    c(l.arg);
                  })(a, o, r, i);
                });
              }
              return (r = r ? r.then(i, i) : i());
            },
          });
        }
        function N(e, t, n) {
          var a = "suspendedStart";
          return function (r, o) {
            if ("executing" === a)
              throw new Error("Generator is already running");
            if ("completed" === a) {
              if ("throw" === r) throw o;
              return w();
            }
            for (n.method = r, n.arg = o; ; ) {
              var i = n.delegate;
              if (i) {
                var c = O(i, n);
                if (c) {
                  if (c === d) continue;
                  return c;
                }
              }
              if ("next" === n.method) n.sent = n._sent = n.arg;
              else if ("throw" === n.method) {
                if ("suspendedStart" === a) throw ((a = "completed"), n.arg);
                n.dispatchException(n.arg);
              } else "return" === n.method && n.abrupt("return", n.arg);
              a = "executing";
              var l = s(e, t, n);
              if ("normal" === l.type) {
                if (
                  ((a = n.done ? "completed" : "suspendedYield"), l.arg === d)
                )
                  continue;
                return { value: l.arg, done: n.done };
              }
              "throw" === l.type &&
                ((a = "completed"), (n.method = "throw"), (n.arg = l.arg));
            }
          };
        }
        function O(e, t) {
          var n = t.method,
            a = e.iterator[n];
          if (void 0 === a)
            return (
              (t.delegate = null),
              ("throw" === n &&
                e.iterator.return &&
                ((t.method = "return"),
                (t.arg = void 0),
                O(e, t),
                "throw" === t.method)) ||
                ("return" !== n &&
                  ((t.method = "throw"),
                  (t.arg = new TypeError(
                    "The iterator does not provide a '" + n + "' method"
                  )))),
              d
            );
          var r = s(a, e.iterator, t.arg);
          if ("throw" === r.type)
            return (
              (t.method = "throw"), (t.arg = r.arg), (t.delegate = null), d
            );
          var o = r.arg;
          return o
            ? o.done
              ? ((t[e.resultName] = o.value),
                (t.next = e.nextLoc),
                "return" !== t.method &&
                  ((t.method = "next"), (t.arg = void 0)),
                (t.delegate = null),
                d)
              : o
            : ((t.method = "throw"),
              (t.arg = new TypeError("iterator result is not an object")),
              (t.delegate = null),
              d);
        }
        function _(e) {
          var t = { tryLoc: e[0] };
          1 in e && (t.catchLoc = e[1]),
            2 in e && ((t.finallyLoc = e[2]), (t.afterLoc = e[3])),
            this.tryEntries.push(t);
        }
        function P(e) {
          var t = e.completion || {};
          (t.type = "normal"), delete t.arg, (e.completion = t);
        }
        function j(e) {
          (this.tryEntries = [{ tryLoc: "root" }]),
            e.forEach(_, this),
            this.reset(!0);
        }
        function C(e) {
          if (e) {
            var t = e[o];
            if (t) return t.call(e);
            if ("function" == typeof e.next) return e;
            if (!isNaN(e.length)) {
              var a = -1,
                r = function t() {
                  for (; ++a < e.length; )
                    if (n.call(e, a)) return (t.value = e[a]), (t.done = !1), t;
                  return (t.value = void 0), (t.done = !0), t;
                };
              return (r.next = r);
            }
          }
          return { next: w };
        }
        function w() {
          return { value: void 0, done: !0 };
        }
        return (
          (p.prototype = f),
          a(g, "constructor", { value: f, configurable: !0 }),
          a(f, "constructor", { value: p, configurable: !0 }),
          (p.displayName = l(f, c, "GeneratorFunction")),
          (e.isGeneratorFunction = function (e) {
            var t = "function" == typeof e && e.constructor;
            return (
              !!t &&
              (t === p || "GeneratorFunction" === (t.displayName || t.name))
            );
          }),
          (e.mark = function (e) {
            return (
              Object.setPrototypeOf
                ? Object.setPrototypeOf(e, f)
                : ((e.__proto__ = f), l(e, c, "GeneratorFunction")),
              (e.prototype = Object.create(g)),
              e
            );
          }),
          (e.awrap = function (e) {
            return { __await: e };
          }),
          E(y.prototype),
          l(y.prototype, i, function () {
            return this;
          }),
          (e.AsyncIterator = y),
          (e.async = function (t, n, a, r, o) {
            void 0 === o && (o = Promise);
            var i = new y(u(t, n, a, r), o);
            return e.isGeneratorFunction(n)
              ? i
              : i.next().then(function (e) {
                  return e.done ? e.value : i.next();
                });
          }),
          E(g),
          l(g, c, "Generator"),
          l(g, o, function () {
            return this;
          }),
          l(g, "toString", function () {
            return "[object Generator]";
          }),
          (e.keys = function (e) {
            var t = Object(e),
              n = [];
            for (var a in t) n.push(a);
            return (
              n.reverse(),
              function e() {
                for (; n.length; ) {
                  var a = n.pop();
                  if (a in t) return (e.value = a), (e.done = !1), e;
                }
                return (e.done = !0), e;
              }
            );
          }),
          (e.values = C),
          (j.prototype = {
            constructor: j,
            reset: function (e) {
              if (
                ((this.prev = 0),
                (this.next = 0),
                (this.sent = this._sent = void 0),
                (this.done = !1),
                (this.delegate = null),
                (this.method = "next"),
                (this.arg = void 0),
                this.tryEntries.forEach(P),
                !e)
              )
                for (var t in this)
                  "t" === t.charAt(0) &&
                    n.call(this, t) &&
                    !isNaN(+t.slice(1)) &&
                    (this[t] = void 0);
            },
            stop: function () {
              this.done = !0;
              var e = this.tryEntries[0].completion;
              if ("throw" === e.type) throw e.arg;
              return this.rval;
            },
            dispatchException: function (e) {
              if (this.done) throw e;
              var t = this;
              function a(n, a) {
                return (
                  (i.type = "throw"),
                  (i.arg = e),
                  (t.next = n),
                  a && ((t.method = "next"), (t.arg = void 0)),
                  !!a
                );
              }
              for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                var o = this.tryEntries[r],
                  i = o.completion;
                if ("root" === o.tryLoc) return a("end");
                if (o.tryLoc <= this.prev) {
                  var c = n.call(o, "catchLoc"),
                    l = n.call(o, "finallyLoc");
                  if (c && l) {
                    if (this.prev < o.catchLoc) return a(o.catchLoc, !0);
                    if (this.prev < o.finallyLoc) return a(o.finallyLoc);
                  } else if (c) {
                    if (this.prev < o.catchLoc) return a(o.catchLoc, !0);
                  } else {
                    if (!l)
                      throw new Error("try statement without catch or finally");
                    if (this.prev < o.finallyLoc) return a(o.finallyLoc);
                  }
                }
              }
            },
            abrupt: function (e, t) {
              for (var a = this.tryEntries.length - 1; a >= 0; --a) {
                var r = this.tryEntries[a];
                if (
                  r.tryLoc <= this.prev &&
                  n.call(r, "finallyLoc") &&
                  this.prev < r.finallyLoc
                ) {
                  var o = r;
                  break;
                }
              }
              o &&
                ("break" === e || "continue" === e) &&
                o.tryLoc <= t &&
                t <= o.finallyLoc &&
                (o = null);
              var i = o ? o.completion : {};
              return (
                (i.type = e),
                (i.arg = t),
                o
                  ? ((this.method = "next"), (this.next = o.finallyLoc), d)
                  : this.complete(i)
              );
            },
            complete: function (e, t) {
              if ("throw" === e.type) throw e.arg;
              return (
                "break" === e.type || "continue" === e.type
                  ? (this.next = e.arg)
                  : "return" === e.type
                  ? ((this.rval = this.arg = e.arg),
                    (this.method = "return"),
                    (this.next = "end"))
                  : "normal" === e.type && t && (this.next = t),
                d
              );
            },
            finish: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.finallyLoc === e)
                  return this.complete(n.completion, n.afterLoc), P(n), d;
              }
            },
            catch: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.tryLoc === e) {
                  var a = n.completion;
                  if ("throw" === a.type) {
                    var r = a.arg;
                    P(n);
                  }
                  return r;
                }
              }
              throw new Error("illegal catch attempt");
            },
            delegateYield: function (e, t, n) {
              return (
                (this.delegate = { iterator: C(e), resultName: t, nextLoc: n }),
                "next" === this.method && (this.arg = void 0),
                d
              );
            },
          }),
          e
        );
      }
      var G = Object(h.e)(q.a.REACT_APP_AUTH_URL),
        W = F.a.create();
      delete W.defaults.headers.common.Authorization;
      var H = function (e) {
          return (function () {
            var t = Object(D.a)(
              V().mark(function t(n) {
                return V().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(K.hb)()),
                          t.abrupt(
                            "return",
                            W.post(
                              "".concat(
                                G,
                                "/api/accounts/validate_national_id/"
                              ),
                              e
                            )
                              .then(function (e) {
                                n(Object(K.jb)(Object(c.a)({}, e.data)));
                              })
                              .catch(function (e) {
                                var t = Object(M.a)(e);
                                n(Object(K.ib)(t));
                              })
                          )
                        );
                      case 2:
                      case "end":
                        return t.stop();
                    }
                }, t);
              })
            );
            return function (e) {
              return t.apply(this, arguments);
            };
          })();
        },
        B = function (e) {
          return (function () {
            var t = Object(D.a)(
              V().mark(function t(n) {
                return V().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(K.Y)()),
                          t.abrupt(
                            "return",
                            W.post(
                              "".concat(G, "/api/accounts/validate_kra_pin/"),
                              e
                            )
                              .then(function (e) {
                                n(Object(K.ab)(e.data));
                              })
                              .catch(function (e) {
                                var t = Object(M.a)(e);
                                n(Object(K.Z)(t));
                              })
                          )
                        );
                      case 2:
                      case "end":
                        return t.stop();
                    }
                }, t);
              })
            );
            return function (e) {
              return t.apply(this, arguments);
            };
          })();
        },
        z = function (e) {
          return (function () {
            var t = Object(D.a)(
              V().mark(function t(n) {
                return V().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(K.d)()),
                          t.abrupt(
                            "return",
                            W.post(
                              "".concat(G, "/api/accounts/change_phone/"),
                              e
                            )
                              .then(function (e) {
                                n(Object(K.f)(e.data)),
                                  n({ type: "CLOSE_MODAL" });
                              })
                              .catch(function (e) {
                                var t = Object(M.a)(e);
                                n(Object(K.e)(t));
                              })
                          )
                        );
                      case 2:
                      case "end":
                        return t.stop();
                    }
                }, t);
              })
            );
            return function (e) {
              return t.apply(this, arguments);
            };
          })();
        },
        Y = function (e) {
          return (function () {
            var t = Object(D.a)(
              V().mark(function t(n) {
                return V().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(K.L)()),
                          t.abrupt(
                            "return",
                            W.post(
                              "".concat(G, "/api/accounts/send_otp_email/"),
                              e
                            )
                              .then(function (e) {
                                n(Object(K.N)(e.data));
                              })
                              .catch(function (e) {
                                var t = Object(M.a)(e);
                                n(Object(K.M)(t));
                              })
                          )
                        );
                      case 2:
                      case "end":
                        return t.stop();
                    }
                }, t);
              })
            );
            return function (e) {
              return t.apply(this, arguments);
            };
          })();
        };
      function Z() {
        Z = function () {
          return e;
        };
        var e = {},
          t = Object.prototype,
          n = t.hasOwnProperty,
          a =
            Object.defineProperty ||
            function (e, t, n) {
              e[t] = n.value;
            },
          r = "function" == typeof Symbol ? Symbol : {},
          o = r.iterator || "@@iterator",
          i = r.asyncIterator || "@@asyncIterator",
          c = r.toStringTag || "@@toStringTag";
        function l(e, t, n) {
          return (
            Object.defineProperty(e, t, {
              value: n,
              enumerable: !0,
              configurable: !0,
              writable: !0,
            }),
            e[t]
          );
        }
        try {
          l({}, "");
        } catch (S) {
          l = function (e, t, n) {
            return (e[t] = n);
          };
        }
        function u(e, t, n, r) {
          var o = t && t.prototype instanceof m ? t : m,
            i = Object.create(o.prototype),
            c = new j(r || []);
          return a(i, "_invoke", { value: N(e, n, c) }), i;
        }
        function s(e, t, n) {
          try {
            return { type: "normal", arg: e.call(t, n) };
          } catch (S) {
            return { type: "throw", arg: S };
          }
        }
        e.wrap = u;
        var d = {};
        function m() {}
        function p() {}
        function f() {}
        var v = {};
        l(v, o, function () {
          return this;
        });
        var b = Object.getPrototypeOf,
          h = b && b(b(C([])));
        h && h !== t && n.call(h, o) && (v = h);
        var g = (f.prototype = m.prototype = Object.create(v));
        function E(e) {
          ["next", "throw", "return"].forEach(function (t) {
            l(e, t, function (e) {
              return this._invoke(t, e);
            });
          });
        }
        function y(e, t) {
          var r;
          a(this, "_invoke", {
            value: function (a, o) {
              function i() {
                return new t(function (r, i) {
                  !(function a(r, o, i, c) {
                    var l = s(e[r], e, o);
                    if ("throw" !== l.type) {
                      var u = l.arg,
                        d = u.value;
                      return d && "object" == typeof d && n.call(d, "__await")
                        ? t.resolve(d.__await).then(
                            function (e) {
                              a("next", e, i, c);
                            },
                            function (e) {
                              a("throw", e, i, c);
                            }
                          )
                        : t.resolve(d).then(
                            function (e) {
                              (u.value = e), i(u);
                            },
                            function (e) {
                              return a("throw", e, i, c);
                            }
                          );
                    }
                    c(l.arg);
                  })(a, o, r, i);
                });
              }
              return (r = r ? r.then(i, i) : i());
            },
          });
        }
        function N(e, t, n) {
          var a = "suspendedStart";
          return function (r, o) {
            if ("executing" === a)
              throw new Error("Generator is already running");
            if ("completed" === a) {
              if ("throw" === r) throw o;
              return w();
            }
            for (n.method = r, n.arg = o; ; ) {
              var i = n.delegate;
              if (i) {
                var c = O(i, n);
                if (c) {
                  if (c === d) continue;
                  return c;
                }
              }
              if ("next" === n.method) n.sent = n._sent = n.arg;
              else if ("throw" === n.method) {
                if ("suspendedStart" === a) throw ((a = "completed"), n.arg);
                n.dispatchException(n.arg);
              } else "return" === n.method && n.abrupt("return", n.arg);
              a = "executing";
              var l = s(e, t, n);
              if ("normal" === l.type) {
                if (
                  ((a = n.done ? "completed" : "suspendedYield"), l.arg === d)
                )
                  continue;
                return { value: l.arg, done: n.done };
              }
              "throw" === l.type &&
                ((a = "completed"), (n.method = "throw"), (n.arg = l.arg));
            }
          };
        }
        function O(e, t) {
          var n = t.method,
            a = e.iterator[n];
          if (void 0 === a)
            return (
              (t.delegate = null),
              ("throw" === n &&
                e.iterator.return &&
                ((t.method = "return"),
                (t.arg = void 0),
                O(e, t),
                "throw" === t.method)) ||
                ("return" !== n &&
                  ((t.method = "throw"),
                  (t.arg = new TypeError(
                    "The iterator does not provide a '" + n + "' method"
                  )))),
              d
            );
          var r = s(a, e.iterator, t.arg);
          if ("throw" === r.type)
            return (
              (t.method = "throw"), (t.arg = r.arg), (t.delegate = null), d
            );
          var o = r.arg;
          return o
            ? o.done
              ? ((t[e.resultName] = o.value),
                (t.next = e.nextLoc),
                "return" !== t.method &&
                  ((t.method = "next"), (t.arg = void 0)),
                (t.delegate = null),
                d)
              : o
            : ((t.method = "throw"),
              (t.arg = new TypeError("iterator result is not an object")),
              (t.delegate = null),
              d);
        }
        function _(e) {
          var t = { tryLoc: e[0] };
          1 in e && (t.catchLoc = e[1]),
            2 in e && ((t.finallyLoc = e[2]), (t.afterLoc = e[3])),
            this.tryEntries.push(t);
        }
        function P(e) {
          var t = e.completion || {};
          (t.type = "normal"), delete t.arg, (e.completion = t);
        }
        function j(e) {
          (this.tryEntries = [{ tryLoc: "root" }]),
            e.forEach(_, this),
            this.reset(!0);
        }
        function C(e) {
          if (e) {
            var t = e[o];
            if (t) return t.call(e);
            if ("function" == typeof e.next) return e;
            if (!isNaN(e.length)) {
              var a = -1,
                r = function t() {
                  for (; ++a < e.length; )
                    if (n.call(e, a)) return (t.value = e[a]), (t.done = !1), t;
                  return (t.value = void 0), (t.done = !0), t;
                };
              return (r.next = r);
            }
          }
          return { next: w };
        }
        function w() {
          return { value: void 0, done: !0 };
        }
        return (
          (p.prototype = f),
          a(g, "constructor", { value: f, configurable: !0 }),
          a(f, "constructor", { value: p, configurable: !0 }),
          (p.displayName = l(f, c, "GeneratorFunction")),
          (e.isGeneratorFunction = function (e) {
            var t = "function" == typeof e && e.constructor;
            return (
              !!t &&
              (t === p || "GeneratorFunction" === (t.displayName || t.name))
            );
          }),
          (e.mark = function (e) {
            return (
              Object.setPrototypeOf
                ? Object.setPrototypeOf(e, f)
                : ((e.__proto__ = f), l(e, c, "GeneratorFunction")),
              (e.prototype = Object.create(g)),
              e
            );
          }),
          (e.awrap = function (e) {
            return { __await: e };
          }),
          E(y.prototype),
          l(y.prototype, i, function () {
            return this;
          }),
          (e.AsyncIterator = y),
          (e.async = function (t, n, a, r, o) {
            void 0 === o && (o = Promise);
            var i = new y(u(t, n, a, r), o);
            return e.isGeneratorFunction(n)
              ? i
              : i.next().then(function (e) {
                  return e.done ? e.value : i.next();
                });
          }),
          E(g),
          l(g, c, "Generator"),
          l(g, o, function () {
            return this;
          }),
          l(g, "toString", function () {
            return "[object Generator]";
          }),
          (e.keys = function (e) {
            var t = Object(e),
              n = [];
            for (var a in t) n.push(a);
            return (
              n.reverse(),
              function e() {
                for (; n.length; ) {
                  var a = n.pop();
                  if (a in t) return (e.value = a), (e.done = !1), e;
                }
                return (e.done = !0), e;
              }
            );
          }),
          (e.values = C),
          (j.prototype = {
            constructor: j,
            reset: function (e) {
              if (
                ((this.prev = 0),
                (this.next = 0),
                (this.sent = this._sent = void 0),
                (this.done = !1),
                (this.delegate = null),
                (this.method = "next"),
                (this.arg = void 0),
                this.tryEntries.forEach(P),
                !e)
              )
                for (var t in this)
                  "t" === t.charAt(0) &&
                    n.call(this, t) &&
                    !isNaN(+t.slice(1)) &&
                    (this[t] = void 0);
            },
            stop: function () {
              this.done = !0;
              var e = this.tryEntries[0].completion;
              if ("throw" === e.type) throw e.arg;
              return this.rval;
            },
            dispatchException: function (e) {
              if (this.done) throw e;
              var t = this;
              function a(n, a) {
                return (
                  (i.type = "throw"),
                  (i.arg = e),
                  (t.next = n),
                  a && ((t.method = "next"), (t.arg = void 0)),
                  !!a
                );
              }
              for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                var o = this.tryEntries[r],
                  i = o.completion;
                if ("root" === o.tryLoc) return a("end");
                if (o.tryLoc <= this.prev) {
                  var c = n.call(o, "catchLoc"),
                    l = n.call(o, "finallyLoc");
                  if (c && l) {
                    if (this.prev < o.catchLoc) return a(o.catchLoc, !0);
                    if (this.prev < o.finallyLoc) return a(o.finallyLoc);
                  } else if (c) {
                    if (this.prev < o.catchLoc) return a(o.catchLoc, !0);
                  } else {
                    if (!l)
                      throw new Error("try statement without catch or finally");
                    if (this.prev < o.finallyLoc) return a(o.finallyLoc);
                  }
                }
              }
            },
            abrupt: function (e, t) {
              for (var a = this.tryEntries.length - 1; a >= 0; --a) {
                var r = this.tryEntries[a];
                if (
                  r.tryLoc <= this.prev &&
                  n.call(r, "finallyLoc") &&
                  this.prev < r.finallyLoc
                ) {
                  var o = r;
                  break;
                }
              }
              o &&
                ("break" === e || "continue" === e) &&
                o.tryLoc <= t &&
                t <= o.finallyLoc &&
                (o = null);
              var i = o ? o.completion : {};
              return (
                (i.type = e),
                (i.arg = t),
                o
                  ? ((this.method = "next"), (this.next = o.finallyLoc), d)
                  : this.complete(i)
              );
            },
            complete: function (e, t) {
              if ("throw" === e.type) throw e.arg;
              return (
                "break" === e.type || "continue" === e.type
                  ? (this.next = e.arg)
                  : "return" === e.type
                  ? ((this.rval = this.arg = e.arg),
                    (this.method = "return"),
                    (this.next = "end"))
                  : "normal" === e.type && t && (this.next = t),
                d
              );
            },
            finish: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.finallyLoc === e)
                  return this.complete(n.completion, n.afterLoc), P(n), d;
              }
            },
            catch: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.tryLoc === e) {
                  var a = n.completion;
                  if ("throw" === a.type) {
                    var r = a.arg;
                    P(n);
                  }
                  return r;
                }
              }
              throw new Error("illegal catch attempt");
            },
            delegateYield: function (e, t, n) {
              return (
                (this.delegate = { iterator: C(e), resultName: t, nextLoc: n }),
                "next" === this.method && (this.arg = void 0),
                d
              );
            },
          }),
          e
        );
      }
      var J = Object(h.e)(q.a.REACT_APP_AUTH_URL),
        Q = F.a.create();
      delete Q.defaults.headers.common.Authorization;
      var $ = function (e) {
          return (function () {
            var t = Object(D.a)(
              Z().mark(function t(n) {
                return Z().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(K.C)()),
                          t.abrupt(
                            "return",
                            Q.post("".concat(J, "/api/accounts/send_otp/"), e)
                              .then(function (e) {
                                n(Object(K.E)(e.data));
                              })
                              .catch(function (e) {
                                var t = Object(M.a)(e);
                                n(Object(K.D)(t));
                              })
                          )
                        );
                      case 2:
                      case "end":
                        return t.stop();
                    }
                }, t);
              })
            );
            return function (e) {
              return t.apply(this, arguments);
            };
          })();
        },
        X = n(357),
        ee = n.n(X),
        te = n(324),
        ne = n.n(te),
        ae = n(212),
        re = function () {
          var e,
            t,
            n,
            E = Object(a.useState)(0),
            y = Object(l.a)(E, 2),
            N = y[0],
            O = y[1],
            _ = Object(a.useState)({}),
            L = Object(l.a)(_, 2),
            A = L[0],
            I = L[1],
            U = Object(a.useState)(""),
            F = Object(l.a)(U, 2),
            q = F[0],
            Y = F[1],
            Z = Object(a.useState)(!1),
            J = Object(l.a)(Z, 2),
            Q = J[0],
            X = J[1],
            te = Object(a.useState)({ passwordStrength: -1, helpText: "" }),
            re = Object(l.a)(te, 2),
            oe = re[0],
            ie = re[1],
            ce = Object(a.useState)(!1),
            le = Object(l.a)(ce, 2),
            ue = le[0],
            se = le[1],
            de = function () {
              return se(!ue);
            },
            me = Object(v.f)(),
            pe = function (e) {
              fe(Object(K.O)(e.currentTarget.id));
            },
            fe = Object(o.useDispatch)(),
            ve = Object(o.useSelector)(function (e) {
              return e;
            }),
            be = ve.registerUser,
            he = ve.OTP,
            ge = ve.modal,
            Ee = be.serialNumber,
            ye = be.alienNumber,
            Ne = be.maidenName,
            Oe = be.kraPinValidation,
            _e = be.mobileNumber,
            Pe = be.professionalTypes,
            je = be.activeMenu || "individual",
            Ce = he.isOtpSent,
            we = he.isLoading,
            Se = ge.shouldOpen,
            xe = ge.modalType,
            Le = Oe.error || Ne.error || Ee.error || ye.error,
            Te = Ee.isLoading || Ne.isLoading || Oe.isLoading || we,
            Ae =
              null === (e = Pe.data) || void 0 === e
                ? void 0
                : e.map(function (e) {
                    return { value: e.name, label: e.name, id: "profession" };
                  }),
            ke = Object(a.useState)({ alien: !1 }),
            Ie = Object(l.a)(ke, 2),
            Re = Ie[0],
            De = Ie[1],
            Ue = [
              { id: "alien", label: "ALIEN", value: !0 },
              { id: "alien", label: "CITIZEN", value: !1 },
            ],
            Fe = function (e) {
              I(
                Object(c.a)(
                  Object(c.a)({}, A),
                  {},
                  Object(i.a)({}, e.target.id, e.target.value)
                )
              );
            },
            Me = function () {
              var e;
              fe(
                $({
                  phone_number:
                    (null === A || void 0 === A ? void 0 : A.phoneNumber) ||
                    (null === Oe ||
                    void 0 === Oe ||
                    null === (e = Oe.data) ||
                    void 0 === e
                      ? void 0
                      : e.mobile_number),
                })
              );
            };
          Object(a.useEffect)(
            function () {
              (null === Oe || void 0 === Oe ? void 0 : Oe.data.valid)
                ? Y(null === Oe || void 0 === Oe ? void 0 : Oe.data.full_name)
                : (Ne.isValid &&
                    !1 ===
                      (null === Re || void 0 === Re ? void 0 : Re.alien)) ||
                  Ee.isValid ||
                  (ye.isValid &&
                    !0 === (null === Re || void 0 === Re ? void 0 : Re.alien))
                ? O(2)
                : O(0);
            },
            [Re.alien, ye.isValid, Oe.data, Ne.isValid, Ee]
          ),
            Object(a.useEffect)(
              function () {
                Ce && O(5);
              },
              [Ce]
            ),
            Object(a.useEffect)(
              function () {
                var e;
                I(
                  Object(c.a)(
                    Object(c.a)({}, A),
                    {},
                    {
                      phoneNumber:
                        null === Oe ||
                        void 0 === Oe ||
                        null === (e = Oe.data) ||
                        void 0 === e
                          ? void 0
                          : e.mobile_number,
                    }
                  )
                );
              },
              [Oe.data]
            ),
            Object(a.useEffect)(
              function () {
                fe(Object(K.y)());
              },
              [fe]
            ),
            Object(a.useEffect)(
              function () {
                fe(
                  (function () {
                    var e = Object(D.a)(
                      V().mark(function e(t) {
                        return V().wrap(function (e) {
                          for (;;)
                            switch ((e.prev = e.next)) {
                              case 0:
                                return (
                                  t(Object(K.s)()),
                                  e.abrupt(
                                    "return",
                                    W.get(
                                      "".concat(
                                        G,
                                        "/api/professions/profession_types/"
                                      )
                                    )
                                      .then(function (e) {
                                        t(Object(K.u)(e.data));
                                      })
                                      .catch(function (e) {
                                        var n = Object(M.a)(e);
                                        t(Object(K.t)(n));
                                      })
                                  )
                                );
                              case 2:
                              case "end":
                                return e.stop();
                            }
                        }, e);
                      })
                    );
                    return function (t) {
                      return e.apply(this, arguments);
                    };
                  })()
                );
              },
              [fe]
            );
          var qe = function () {
            1 === N
              ? (fe(Object(K.ib)("")), O(N - 1))
              : 2 === N
              ? (O(1), fe(Object(K.cb)("")), fe(Object(K.Z)("")))
              : 3 === N
              ? console.log("")
              : 4 === N
              ? fe(Object(K.D)(""))
              : O(N - 1);
          };
          return r.a.createElement(
            S.a,
            { sideImage: T.a, customStylesClass: k.a.loginContainer },
            r.a.createElement(
              r.a.Fragment,
              null,
              r.a.createElement(
                u.a,
                { xs: "13", className: "text-right" },
                r.a.createElement(
                  "p",
                  { className: "mb-3 mt-0" },
                  r.a.createElement(
                    "small",
                    { className: "text-dark mr-2" },
                    "Already have an account ?"
                  ),
                  r.a.createElement(
                    b.b,
                    {
                      style: { color: "#078930" },
                      to: "/login",
                      className: "font-weight-bold",
                    },
                    "Sign In"
                  )
                ),
                0 !== N &&
                  r.a.createElement(
                    "p",
                    {
                      className: "mb-0 mt-3",
                      style: { cursor: "pointer" },
                      onClick: qe,
                    },
                    r.a.createElement(
                      "small",
                      { className: "text-dark mr-2" },
                      "Go back"
                    )
                  )
              ),
              r.a.createElement(
                "h4",
                { className: "mb-4 text-center" },
                "SIGN UP"
              ),
              0 === N &&
                r.a.createElement(
                  s.a,
                  { className: "pl-3 pr-3 pb-3 align-items-center" },
                  r.a.createElement(
                    u.a,
                    {
                      onClick: pe,
                      id: "individual",
                      className: "shadow border rounded mr-2 text-center  "
                        .concat(k.a.accountSelect, " ")
                        .concat("individual" === je && k.a.selected),
                    },
                    r.a.createElement("p", { className: "mt-3" }, "Individual")
                  ),
                  r.a.createElement(
                    u.a,
                    {
                      onClick: pe,
                      id: "company",
                      className: "shadow border rounded ml-2 text-center  "
                        .concat(k.a.accountSelect, " ")
                        .concat("company" === je && k.a.selected),
                    },
                    r.a.createElement(
                      "p",
                      { className: "mt-3" },
                      "Non-individual"
                    )
                  ),
                  r.a.createElement("i", {
                    id: "accountType",
                    className: "mdi mdi-information-outline pl-5",
                  }),
                  r.a.createElement(
                    d.a,
                    {
                      placement: "top",
                      isOpen: Q,
                      target: "accountType",
                      toggle: function () {
                        return X(!Q);
                      },
                    },
                    "Use Individual tab if account belongs to an individual or a sole- proprietorship only. All other organizations and business types should use Non-Individual tab"
                  )
                ),
              Le &&
                r.a.createElement(
                  "div",
                  { className: "text-center" },
                  r.a.createElement(m.a, { color: "danger" }, Le)
                ),
              r.a.createElement(
                f.AvForm,
                {
                  onValidSubmit: function () {
                    var e, t, n, a, r, o;
                    switch (N) {
                      case 0:
                        var i, l, u;
                        if (
                          !1 ===
                          (null === Re || void 0 === Re ? void 0 : Re.alien)
                        )
                          fe(
                            H({
                              national_id:
                                null !==
                                  (i =
                                    null === (l = A.serialNumber) ||
                                    void 0 === l
                                      ? void 0
                                      : l.trim()) && void 0 !== i
                                  ? i
                                  : A.id_no,
                            })
                          );
                        else
                          fe(
                            ((o = {
                              national_id:
                                null === (u = A.id_no) || void 0 === u
                                  ? void 0
                                  : u.trim(),
                            }),
                            (function () {
                              var e = Object(D.a)(
                                V().mark(function e(t) {
                                  return V().wrap(function (e) {
                                    for (;;)
                                      switch ((e.prev = e.next)) {
                                        case 0:
                                          return (
                                            t(Object(K.S)()),
                                            e.abrupt(
                                              "return",
                                              W.post(
                                                "".concat(
                                                  G,
                                                  "/api/accounts/validate_alien_national_id/"
                                                ),
                                                o
                                              )
                                                .then(function (e) {
                                                  t(
                                                    Object(K.U)(
                                                      Object(c.a)({}, e.data)
                                                    )
                                                  );
                                                })
                                                .catch(function (e) {
                                                  var n = Object(M.a)(e);
                                                  t(Object(K.T)(n));
                                                })
                                            )
                                          );
                                        case 2:
                                        case "end":
                                          return e.stop();
                                      }
                                  }, e);
                                })
                              );
                              return function (t) {
                                return e.apply(this, arguments);
                              };
                            })())
                          );
                        break;
                      case 1:
                        fe(
                          (function (e) {
                            return (function () {
                              var t = Object(D.a)(
                                V().mark(function t(n) {
                                  return V().wrap(function (t) {
                                    for (;;)
                                      switch ((t.prev = t.next)) {
                                        case 0:
                                          return (
                                            n(Object(K.bb)()),
                                            t.abrupt(
                                              "return",
                                              W.post(
                                                "".concat(
                                                  G,
                                                  "/api/accounts/validate_maiden_name/"
                                                ),
                                                e
                                              )
                                                .then(function (e) {
                                                  n(Object(K.db)(e.data));
                                                })
                                                .catch(function (e) {
                                                  var t = Object(M.a)(e);
                                                  n(Object(K.cb)(t));
                                                })
                                            )
                                          );
                                        case 2:
                                        case "end":
                                          return t.stop();
                                      }
                                  }, t);
                                })
                              );
                              return function (e) {
                                return t.apply(this, arguments);
                              };
                            })();
                          })({
                            national_id_serial:
                              null === (e = A.serialNumber) || void 0 === e
                                ? void 0
                                : e.trim(),
                            maiden_name:
                              null === (t = A.maidenName) || void 0 === t
                                ? void 0
                                : t.trim(),
                          })
                        );
                        break;
                      case 2:
                        var s =
                          !1 ===
                          (null === Re || void 0 === Re ? void 0 : Re.alien)
                            ? {
                                national_id:
                                  null === (n = A.serialNumber) || void 0 === n
                                    ? void 0
                                    : n.trim(),
                              }
                            : {
                                national_id:
                                  null === (a = A.id_no) || void 0 === a
                                    ? void 0
                                    : a.trim(),
                              };
                        (null === Oe || void 0 === Oe ? void 0 : Oe.data.valid)
                          ? O(3)
                          : fe(
                              B(
                                Object(c.a)(
                                  Object(c.a)({}, s),
                                  {},
                                  {
                                    kra_pin:
                                      null === (r = A.kraPin) || void 0 === r
                                        ? void 0
                                        : r.trim(),
                                    is_alien:
                                      null === Re || void 0 === Re
                                        ? void 0
                                        : Re.alien,
                                  }
                                )
                              )
                            );
                        break;
                      case 4:
                        Me();
                        break;
                      default:
                        O(N + 1);
                    }
                  },
                },
                r.a.createElement(
                  s.a,
                  null,
                  0 === N &&
                    r.a.createElement(
                      r.a.Fragment,
                      null,
                      "individual" === be.activeMenu &&
                        r.a.createElement(
                          u.a,
                          { lg: "12" },
                          r.a.createElement(w.a, {
                            handleSelectChange: function (e) {
                              De(Object(i.a)({}, e.id, e.value));
                            },
                            options: Ue,
                            placeholder: "Citizenship",
                            label: "Citizenship",
                            labelId: "alien",
                            key: "alien",
                            isLoading: Te,
                            selectedValue:
                              null === Re || void 0 === Re ? void 0 : Re.alien,
                            defaultValue: Ue.find(function (e) {
                              return !1 === e.value;
                            }),
                            requiredError: "Please specify your Citizenship",
                          })
                        ),
                      !1 === (null === Re || void 0 === Re ? void 0 : Re.alien)
                        ? r.a.createElement(
                            r.a.Fragment,
                            null,
                            r.a.createElement(
                              d.a,
                              {
                                placement: "top",
                                isOpen: ue,
                                target: "infoIcon",
                                toggle: de,
                              },
                              "Kindly note that ID Serial Number is the Serial Number located on the LEFT hand side of your National/Alien ID Card and NOT your National/Alien ID Number.'"
                            ),
                            r.a.createElement(
                              u.a,
                              { lg: "12" },
                              r.a.createElement(
                                C.a,
                                {
                                  label: r.a.createElement(
                                    r.a.Fragment,
                                    null,
                                    "Enter your National ID number",
                                    r.a.createElement("i", {
                                      id: "infoIcon",
                                      className:
                                        "mdi mdi-information-outline pl-5",
                                    })
                                  ),
                                  required: !0,
                                  type: "text",
                                  className: "form-control pl-5",
                                  name: "serialNumber",
                                  id: "serialNumber",
                                  placeholder: "National ID number",
                                  onChange: Fe,
                                  validate: {
                                    required: {
                                      value: !0,
                                      errorMessage:
                                        "Please enter your National ID number",
                                    },
                                  },
                                },
                                r.a.createElement("i", {
                                  className: "mdi mdi-account ml-3 icons",
                                })
                              )
                            )
                          )
                        : r.a.createElement(
                            r.a.Fragment,
                            null,
                            r.a.createElement(
                              d.a,
                              {
                                placement: "top",
                                isOpen: ue,
                                target: "infoIcon",
                                toggle: de,
                              },
                              "Kindly note that ID Number is the Number located on the RIGHT hand side of your National/Alien ID Card.'"
                            ),
                            r.a.createElement(
                              u.a,
                              { lg: "12" },
                              r.a.createElement(
                                C.a,
                                {
                                  label: r.a.createElement(
                                    r.a.Fragment,
                                    null,
                                    "Enter your National ID number",
                                    r.a.createElement("i", {
                                      id: "infoIcon",
                                      className:
                                        "mdi mdi-information-outline pl-5",
                                    })
                                  ),
                                  required: !0,
                                  type: "text",
                                  className: "form-control pl-5",
                                  name: "id_no",
                                  id: "id_no",
                                  placeholder: "National ID number",
                                  onChange: Fe,
                                  validate: {
                                    required: {
                                      value: !0,
                                      errorMessage:
                                        "Please enter your National ID number",
                                    },
                                  },
                                },
                                r.a.createElement("i", {
                                  className: "mdi mdi-account ml-3 icons",
                                })
                              )
                            )
                          )
                    ),
                  1 === N &&
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        C.a,
                        {
                          label: "Enter mother's first name as per National ID",
                          required: !0,
                          type: "text",
                          className: "form-control pl-5",
                          name: "maidenName",
                          id: "maidenName",
                          placeholder: "Mother first name",
                          onChange: Fe,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "Enter mother's first name as per National ID",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-account ml-3 icons",
                        })
                      )
                    ),
                  2 === N &&
                    r.a.createElement(
                      r.a.Fragment,
                      null,
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          C.a,
                          {
                            labelFor: "email",
                            label: "Enter your KRA PIN",
                            required: !0,
                            type: "text",
                            className: "form-control pl-5",
                            disabled:
                              null === Oe || void 0 === Oe
                                ? void 0
                                : Oe.data.valid,
                            name: "kraPin",
                            id: "kraPin",
                            placeholder: "KRA PIN",
                            onChange: Fe,
                            validate: {
                              required: {
                                value: !0,
                                errorMessage: "Please enter your KRA PIN",
                              },
                            },
                          },
                          r.a.createElement("i", {
                            className: "mdi mdi-account ml-3 icons",
                          })
                        )
                      ),
                      (null === Oe || void 0 === Oe ? void 0 : Oe.data.valid) &&
                        r.a.createElement(
                          r.a.Fragment,
                          null,
                          r.a.createElement(
                            u.a,
                            { lg: "12" },
                            r.a.createElement(w.a, {
                              handleSelectChange: function (e) {
                                I(
                                  Object(c.a)(
                                    Object(c.a)({}, A),
                                    {},
                                    Object(i.a)({}, e.id, e.value)
                                  )
                                );
                              },
                              options: Ae,
                              required: !0,
                              placeholder: "Select your profession",
                              label: "Select your profession",
                              labelId: "profession",
                              selectedValue:
                                null === A || void 0 === A
                                  ? void 0
                                  : A.profession,
                              requiredError: "Please select your profession",
                              isLoading: Pe.isLoading,
                            })
                          ),
                          r.a.createElement(
                            u.a,
                            { lg: "12" },
                            r.a.createElement(
                              C.a,
                              {
                                label: "Enter your professional/Licence number",
                                required: !0,
                                type: "text",
                                className: "form-control pl-5",
                                name: "professionalNumber",
                                id: "professionalNumber",
                                placeholder: "Professional/Licence number",
                                onChange: Fe,
                                validate: {
                                  required: {
                                    value: !0,
                                    errorMessage:
                                      "Enter your professional/licence number",
                                  },
                                },
                              },
                              r.a.createElement("i", {
                                className: "mdi mdi-counter ml-3 icons",
                              })
                            )
                          )
                        )
                    )
                ),
                q &&
                  3 === N &&
                  r.a.createElement(
                    r.a.Fragment,
                    null,
                    (null === _e ||
                    void 0 === _e ||
                    null === (t = _e.data) ||
                    void 0 === t
                      ? void 0
                      : t.message) &&
                      r.a.createElement(
                        m.a,
                        { color: "success" },
                        null === _e ||
                          void 0 === _e ||
                          null === (n = _e.data) ||
                          void 0 === n
                          ? void 0
                          : n.message
                      ),
                    r.a.createElement(R, {
                      fullName: q,
                      onContinue: function () {
                        O(N + 1);
                      },
                      regDocNumber: A.kraPin,
                      isLoading: we,
                      phoneNumber: A.phoneNumber,
                      handleChangeNumber: function () {
                        return (function (e) {
                          fe(P(e));
                        })("changeNumber");
                      },
                    })
                  ),
                4 === N &&
                  r.a.createElement(
                    r.a.Fragment,
                    null,
                    r.a.createElement(
                      "h5",
                      { className: "mb-4" },
                      "Create your password"
                    ),
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        C.a,
                        {
                          labelFor: "password",
                          label: "Password",
                          type: "password",
                          className: "form-control pl-5",
                          name: "password",
                          id: "password",
                          placeholder: "Enter password",
                          required: !0,
                          onChange: Fe,
                          onKeyUp: function () {
                            var e = Object(h.d)(A.password);
                            ie(
                              Object(c.a)(
                                Object(c.a)({}, oe),
                                {},
                                {
                                  passwordStrength:
                                    null === e || void 0 === e
                                      ? void 0
                                      : e.strength,
                                  helpText:
                                    null === e || void 0 === e
                                      ? void 0
                                      : e.message,
                                }
                              )
                            );
                          },
                          helpText: oe.helpText,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage: "Please enter Password",
                            },
                            pattern: {
                              value: ".{6,}",
                              errorMessage:
                                "Password must be at least six characters and alphanumeric",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-key ml-3 icons",
                        })
                      )
                    ),
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        C.a,
                        {
                          labelFor: "confirmpassword",
                          label: "Confirm Password",
                          type: "password",
                          className: "form-control pl-5",
                          name: "confirmPassword",
                          id: "confirmPassword",
                          placeholder: "Confirm Password",
                          required: !0,
                          onChange: Fe,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage: "Please enter Password",
                            },
                            match: {
                              value: "password",
                              errorMessage: "Passwords do not match",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-key ml-3 icons",
                        })
                      )
                    ),
                    " ",
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        ee.a,
                        {
                          name: "infoCheck",
                          label: "",
                          required: !0,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "Please certify the truthiness of information provided",
                            },
                          },
                        },
                        r.a.createElement(ne.a, {
                          class: "custom-control-input",
                          customInput: !0,
                          label: r.a.createElement(
                            "div",
                            null,
                            "I certify that the information submitted in this application is true and correct to the best of my knowledge."
                          ),
                          value: "termsAndConditions",
                        })
                      )
                    )
                  ),
                N <= 4 &&
                  3 !== N &&
                  r.a.createElement(
                    s.a,
                    null,
                    r.a.createElement(
                      u.a,
                      {
                        lg: "12",
                        className: "mb-0",
                        style: { display: "grid", placeContent: "center" },
                      },
                      r.a.createElement(g.a, {
                        title: N <= 4 ? "Next" : "Register",
                        isLoading: Te,
                      })
                    ),
                    r.a.createElement(
                      "p",
                      { style: { fontSize: "10px", marginTop: "1rem" } },
                      "Read about Nairobi Plan's",
                      " ",
                      r.a.createElement(
                        b.b,
                        {
                          to: "/data-privacy-policy",
                          target: "_blank",
                          type: "button",
                          style: {
                            color: "black",
                            borderBottom: "1px solid #336856",
                          },
                        },
                        "Privacy Policy"
                      ),
                      " and ",
                      r.a.createElement(
                        b.b,
                        {
                          to: "/terms-and-conditions",
                          style: {
                            color: "black",
                            borderBottom: "1px solid #336856",
                          },
                        },
                        "Terms and Conditions."
                      ),
                      " "
                    )
                  )
              ),
              N < 4 &&
                r.a.createElement(
                  u.a,
                  { xs: "12", className: "text-center" },
                  0 !== N &&
                    r.a.createElement(
                      "p",
                      {
                        className: "mb-0 mt-3",
                        style: { cursor: "pointer" },
                        onClick: qe,
                      },
                      r.a.createElement(
                        "small",
                        { className: "text-dark mr-2" },
                        "Go back"
                      )
                    )
                ),
              5 === N &&
                r.a.createElement(x.a, {
                  isLoading: be.isLoading || he.isLoading,
                  OTPError: he.error || be.error,
                  handleVerifyOTP: function () {
                    var e,
                      t = {
                        email: null,
                        huduma_no: null,
                        phone_number:
                          null === A || void 0 === A ? void 0 : A.phoneNumber,
                        national_id:
                          null === A || void 0 === A ? void 0 : A.serialNumber,
                        kra_pin: null === A || void 0 === A ? void 0 : A.kraPin,
                        maiden_name:
                          null === A ||
                          void 0 === A ||
                          null === (e = A.maidenName) ||
                          void 0 === e
                            ? void 0
                            : e.trim(),
                        verification_otp:
                          null === A || void 0 === A ? void 0 : A.signUpOtp,
                        profession_name:
                          null === A || void 0 === A ? void 0 : A.profession,
                        professional_license_number:
                          null === A || void 0 === A
                            ? void 0
                            : A.professionalNumber,
                        password1:
                          null === A || void 0 === A ? void 0 : A.password,
                        password2:
                          null === A || void 0 === A ? void 0 : A.password,
                        is_alien:
                          null === Re || void 0 === Re ? void 0 : Re.alien,
                      };
                    fe(
                      (function (e, t) {
                        return (function () {
                          var n = Object(D.a)(
                            V().mark(function n(a) {
                              return V().wrap(function (n) {
                                for (;;)
                                  switch ((n.prev = n.next)) {
                                    case 0:
                                      return (
                                        a(Object(K.z)()),
                                        n.abrupt(
                                          "return",
                                          W.post(
                                            "".concat(
                                              G,
                                              "/api/accounts/register/"
                                            ),
                                            e
                                          )
                                            .then(function (e) {
                                              a(
                                                Object(K.B)(
                                                  Object(c.a)({}, e.data)
                                                )
                                              ),
                                                t.push("/login");
                                            })
                                            .catch(function (e) {
                                              var t = Object(M.a)(e);
                                              a(Object(K.A)(t));
                                            })
                                        )
                                      );
                                    case 2:
                                    case "end":
                                      return n.stop();
                                  }
                              }, n);
                            })
                          );
                          return function (e) {
                            return n.apply(this, arguments);
                          };
                        })();
                      })(t, me)
                    );
                  },
                  handleChange: Fe,
                  phoneNumber: A.phoneNumber,
                  id: "signUpOtp",
                  handleResendOTP: Me,
                  cancelOtpPage: function () {
                    O(3);
                  },
                }),
              r.a.createElement(j, {
                showModal: Se && "changeNumber" === xe,
                modalTitle: "Change phone number",
                modalBody: r.a.createElement(
                  r.a.Fragment,
                  null,
                  _e.error &&
                    r.a.createElement(m.a, { color: "danger" }, _e.error),
                  r.a.createElement(
                    f.AvForm,
                    {
                      onValidSubmit: function () {
                        fe(
                          z({
                            kra_pin: A.kraPin,
                            new_number: A.phoneNumber,
                            old_number: A.phoneNumber,
                          })
                        );
                      },
                    },
                    r.a.createElement(
                      s.a,
                      null,
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          C.a,
                          {
                            icon: "mdi mdi-account ml-3 icons",
                            label: "New phone number",
                            required: !0,
                            type: "text",
                            className: "form-control pl-5 ",
                            value: A.phoneNumber,
                            name: "phoneNumber",
                            id: "phoneNumber",
                            onChange: Fe,
                            placeholder: "New phone number",
                            validate: {
                              required: {
                                value: !0,
                                errorMessage:
                                  "Please enter your new phone number",
                              },
                              pattern: { value: ae.d, errorMessage: ae.e },
                            },
                          },
                          r.a.createElement("i", {
                            className: "mdi mdi-cellphone-basic ml-3 icons",
                          })
                        )
                      )
                    ),
                    r.a.createElement("hr", { className: "p-0" }),
                    r.a.createElement(
                      u.a,
                      {
                        style: {
                          display: "flex",
                          flexDirection: "row-reverse",
                        },
                      },
                      r.a.createElement(
                        g.a,
                        {
                          type: "submit",
                          id: "gradient-button",
                          className: "rounded-pill ml-3 mr-3",
                          disabled: _e.isLoading,
                        },
                        _e.isLoading &&
                          r.a.createElement(p.a, {
                            size: "sm",
                            className: "mb-1",
                          }),
                        r.a.createElement("i", {
                          className: "mdi mdi-content-save pr-1 ml-3",
                        }),
                        "Change number"
                      ),
                      r.a.createElement(
                        g.a,
                        {
                          outline: !0,
                          color: "primary rounded-pill pl-2 mr-3",
                          onClick: function () {
                            fe({ type: "CLOSE_MODAL" });
                          },
                        },
                        r.a.createElement("i", { className: "mdi mdi-close " }),
                        "Cancel"
                      )
                    )
                  )
                ),
                actionButtonName: "Change number",
                closeOnOverlayClick: !0,
              })
            )
          );
        },
        oe = n(355),
        ie = function (e) {
          var t = e.OTPError,
            n = e.handleVerifyOTP,
            o = e.handleChange,
            i = e.isLoading,
            c = e.isSuccessFull,
            d = e.children,
            p = e.id,
            v = e.cancelOtpPage,
            b = e.handleResendOTP,
            h = Object(a.useState)(120),
            E = Object(l.a)(h, 2),
            y = E[0],
            N = E[1];
          return (
            Object(a.useEffect)(
              function () {
                var e =
                  y > 0 &&
                  setInterval(function () {
                    return N(y - 1);
                  }, 1e3);
                return function () {
                  return clearInterval(e);
                };
              },
              [y]
            ),
            r.a.createElement(
              r.a.Fragment,
              null,
              r.a.createElement(
                "h5",
                { className: "mb-4" },
                "Verify Pass Code"
              ),
              r.a.createElement(
                "p",
                null,
                "We have sent on organization email address"
              ),
              r.a.createElement(
                "div",
                { className: "text-center" },
                t && r.a.createElement(m.a, { color: "danger" }, t),
                c && r.a.createElement(oe.a, { color: "success" }, d)
              ),
              r.a.createElement(
                f.AvForm,
                { className: "login-form", onSubmit: n },
                r.a.createElement(
                  s.a,
                  null,
                  r.a.createElement(
                    u.a,
                    { lg: "12" },
                    r.a.createElement(
                      C.a,
                      {
                        labelFor: "email",
                        label: "Enter verification code",
                        required: !0,
                        type: "text",
                        className: "form-control pl-5",
                        name: "loginOtp",
                        id: p,
                        onChange: o,
                        placeholder: "Enter Pass code",
                        validate: {
                          required: {
                            value: !0,
                            errorMessage: "Please enter your OTP code",
                          },
                        },
                      },
                      r.a.createElement("i", {
                        className: "mdi mdi-lock-open ml-3 icons",
                      })
                    )
                  ),
                  r.a.createElement(
                    u.a,
                    { lg: "12", className: "mb-0" },
                    r.a.createElement(
                      g.a,
                      { title: "Verify Code", isLoading: i },
                      r.a.createElement("i", { className: "mdi mdi-lock-open" })
                    )
                  ),
                  r.a.createElement(
                    u.a,
                    { lg: 12 },
                    r.a.createElement(
                      s.a,
                      null,
                      r.a.createElement(
                        u.a,
                        { xs: "12", className: "text-center" },
                        r.a.createElement(
                          "p",
                          { className: "mb-0 mt-3" },
                          0 === y &&
                            r.a.createElement(
                              "small",
                              { className: "text-dark mr-2" },
                              "Didn't receive code?"
                            ),
                          r.a.createElement(
                            "span",
                            {
                              onClick: function () {
                                b(), N(120);
                              },
                              className: "text-dark font-weight-bold",
                              style: { cursor: "pointer" },
                            },
                            "Resend code"
                          )
                        )
                      ),
                      r.a.createElement(
                        u.a,
                        { xs: "12", className: "text-center" },
                        r.a.createElement(
                          "div",
                          { className: "mb-0 mt-3" },
                          r.a.createElement(
                            "p",
                            {
                              onClick: v,
                              className: "text-dark font-weight-bold",
                              style: { cursor: "pointer" },
                            },
                            "Click to go back"
                          )
                        )
                      )
                    )
                  )
                )
              )
            )
          );
        },
        ce = function (e) {
          var t = e.fullName,
            n = e.onContinue,
            o = e.regDocNumber,
            i = e.isLoading,
            c = e.email,
            m = Object(a.useState)(!1),
            p = Object(l.a)(m, 2),
            f = p[0],
            v = p[1];
          return r.a.createElement(
            "div",
            { className: "bg-white text-center" },
            r.a.createElement(
              "p",
              { className: "text-muted" },
              "Continue to register Non-individual account as?"
            ),
            r.a.createElement(I.a, { for: "name" }, "Name: "),
            r.a.createElement("h5", null, Object(h.a)(t)),
            r.a.createElement(I.a, { for: "idNumber" }, "KRA PIN:"),
            r.a.createElement("h5", null, o),
            r.a.createElement(
              "p",
              null,
              "We will send a verification code to the organization email"
            ),
            r.a.createElement(
              u.a,
              { xs: 12, className: "mb-4 p-0 text-center" },
              r.a.createElement("strong", null, c),
              " ",
              r.a.createElement("i", {
                id: "infoIcon",
                className: "mdi mdi-information-outline pl-5",
              }),
              r.a.createElement(
                d.a,
                {
                  placement: "right",
                  isOpen: f,
                  target: "infoIcon",
                  toggle: function () {
                    return v(!f);
                  },
                },
                "To change or add email address visit KRA iTax on https://itax.kra.go.ke"
              )
            ),
            r.a.createElement(
              s.a,
              null,
              r.a.createElement(
                u.a,
                { lg: "12", className: "mb-0 mt-3" },
                r.a.createElement(g.a, {
                  title: "Continue",
                  isLoading: i,
                  onClick: n,
                })
              )
            )
          );
        },
        le = function () {
          var e,
            t,
            n,
            E,
            y,
            N,
            O,
            _,
            L = function (e) {
              A(Object(K.O)(e.currentTarget.id));
            },
            A = Object(o.useDispatch)(),
            U = Object(a.useState)(0),
            F = Object(l.a)(U, 2),
            q = F[0],
            Z = F[1],
            J = Object(a.useState)({}),
            Q = Object(l.a)(J, 2),
            X = Q[0],
            te = Q[1],
            re = Object(a.useState)(""),
            oe = Object(l.a)(re, 2),
            le = oe[0],
            ue = oe[1],
            se = Object(a.useState)(!1),
            de = Object(l.a)(se, 2),
            me = de[0],
            pe = de[1],
            fe = Object(a.useState)({ passwordStrength: -1, helpText: "" }),
            ve = Object(l.a)(fe, 2),
            be = ve[0],
            he = ve[1],
            ge = Object(a.useState)(!1),
            Ee = Object(l.a)(ge, 2),
            ye = Ee[0],
            Ne = Ee[1],
            Oe = Object(a.useState)(!1),
            _e = Object(l.a)(Oe, 2),
            Pe = _e[0],
            je = _e[1],
            Ce = Object(o.useSelector)(function (e) {
              return e;
            }),
            we = Ce.registerUser,
            Se = Ce.OTP,
            xe = Ce.modal,
            Le = we.activeMenu || "individual",
            Te = xe.shouldOpen,
            Ae = xe.modalType,
            ke = Se.isOtpSent,
            Ie = Se.otpData,
            Re = we.serialNumber,
            De = we.kraPinValidation,
            Ue = we.companyKraPinValidation,
            Fe = we.mobileNumber,
            Me = we.verificationEmail,
            qe = we.validatePassCode,
            Ke =
              Re.isLoading ||
              De.isLoading ||
              Ue.isLoading ||
              Me.isLoading ||
              qe.isLoading,
            Ve = Object(v.f)(),
            Ge = Ue.error || Re.error || De.error || qe.error,
            We = function (e) {
              te(
                Object(c.a)(
                  Object(c.a)({}, X),
                  {},
                  Object(i.a)({}, e.target.id, e.target.value)
                )
              );
            },
            He = function () {
              var e, t;
              console.log("companyRegData", X),
                console.log("companyKraPinValidation", Ue),
                A(
                  $({
                    pin_no: X.kraPin,
                    phone_number:
                      null !==
                        (e =
                          null === X || void 0 === X
                            ? void 0
                            : X.phoneNumber) && void 0 !== e
                        ? e
                        : null === (t = Ue.data) || void 0 === t
                        ? void 0
                        : t.mobile_number,
                  })
                );
            },
            Be = function () {
              A(Y({ kra_pin: X.kraPin }));
            };
          Object(a.useEffect)(
            function () {
              var e, t, n, a, r;
              X.position;
              ke
                ? Z(8)
                : me
                ? Z(7)
                : (null === (e = qe.data) || void 0 === e ? void 0 : e.valid) ||
                  (null === (t = qe.data) || void 0 === t ? void 0 : t.message)
                ? Z(6)
                : (null === (n = Me.data) || void 0 === n
                    ? void 0
                    : n.email_sent) ||
                  (null === (a = Me.data) || void 0 === a ? void 0 : a.message)
                ? Z(5)
                : (null === (r = De.data) || void 0 === r ? void 0 : r.valid)
                ? Z(4)
                : le
                ? Z(3)
                : Re.isValid
                ? Z(2)
                : (null === Ue || void 0 === Ue ? void 0 : Ue.data.valid)
                ? Z(1)
                : Z(0);
            },
            [
              Ue.data.valid,
              X,
              ke,
              De.data,
              De.isValid,
              Fe.data.status,
              me,
              Re,
              q,
              le,
              qe.data.message,
              qe.data.valid,
              Me.data.email_sent,
              Me.data.message,
            ]
          );
          var ze = function () {
            switch (q) {
              case 1:
                A(Object(K.W)("")), Z(0);
                break;
              case 2:
                Z(1), A(Object(K.ib)(""));
                break;
              case 3:
                Z(2), A(Object(K.cb)(""));
                break;
              case 4:
                Z(3), A(Object(K.Z)(""));
                break;
              case 5:
                Z(4), A(Object(K.M)(""));
                break;
              case 6:
                Z(5), A(Object(K.M)(""));
                break;
              case 7:
                Z(6);
                break;
              case 8:
                Z(7), A(Object(K.D)(""));
                break;
              default:
                Z(0);
            }
          };
          return r.a.createElement(
            S.a,
            { sideImage: T.a, customStylesClass: k.a.loginContainer },
            r.a.createElement(
              r.a.Fragment,
              null,
              r.a.createElement(
                u.a,
                { xs: "13", className: "text-right" },
                r.a.createElement(
                  "p",
                  { className: "mb-3 mt-0" },
                  r.a.createElement(
                    "small",
                    { className: "text-dark mr-2" },
                    "Already have an account ?"
                  ),
                  r.a.createElement(
                    b.b,
                    {
                      style: { color: "#078930" },
                      to: "/login",
                      className: "font-weight-bold",
                    },
                    "Sign In"
                  )
                )
              ),
              r.a.createElement(
                "h4",
                { className: "mb-4 text-center" },
                "SIGN UP"
              ),
              0 === q &&
                r.a.createElement(
                  s.a,
                  { className: "pl-3 pr-3 pb-3 align-items-center" },
                  r.a.createElement(
                    u.a,
                    {
                      onClick: L,
                      id: "individual",
                      className: "shadow border rounded mr-2 text-center  "
                        .concat(k.a.accountSelect, " ")
                        .concat("individual" === Le && k.a.selected),
                    },
                    r.a.createElement("p", { className: "mt-3" }, "Individual")
                  ),
                  r.a.createElement(
                    u.a,
                    {
                      onClick: L,
                      id: "company",
                      className: "shadow border rounded ml-2 text-center  "
                        .concat(k.a.accountSelect, " ")
                        .concat("company" === Le && k.a.selected),
                    },
                    r.a.createElement(
                      "p",
                      { className: "mt-3" },
                      "Non-individual"
                    )
                  ),
                  r.a.createElement("i", {
                    id: "accountType",
                    className: "mdi mdi-information-outline pl-5",
                  }),
                  r.a.createElement(
                    d.a,
                    {
                      placement: "top",
                      isOpen: Pe,
                      target: "accountType",
                      toggle: function () {
                        return je(!Pe);
                      },
                    },
                    "Use Individual tab if account belongs to an individual or a sole- proprietorship only. All other organizations and business types should use Non-Individual tab"
                  )
                ),
              Ge &&
                r.a.createElement(
                  "div",
                  { className: "text-center" },
                  r.a.createElement(m.a, { color: "danger" }, Ge)
                ),
              r.a.createElement(
                f.AvForm,
                {
                  onValidSubmit: function () {
                    switch (q) {
                      case 0:
                        A(
                          ((e = {
                            kra_pin: X.kraPin,
                            license_number: X.licenseNumber,
                          }),
                          (function () {
                            var t = Object(D.a)(
                              V().mark(function t(n) {
                                return V().wrap(function (t) {
                                  for (;;)
                                    switch ((t.prev = t.next)) {
                                      case 0:
                                        return (
                                          n(Object(K.V)()),
                                          t.abrupt(
                                            "return",
                                            W.post(
                                              "".concat(
                                                G,
                                                "/api/accounts/validate_nonind_kra_pin/"
                                              ),
                                              e
                                            )
                                              .then(function (e) {
                                                n(Object(K.X)(e.data));
                                              })
                                              .catch(function (e) {
                                                var t = Object(M.a)(e);
                                                n(Object(K.W)(t));
                                              })
                                          )
                                        );
                                      case 2:
                                      case "end":
                                        return t.stop();
                                    }
                                }, t);
                              })
                            );
                            return function (e) {
                              return t.apply(this, arguments);
                            };
                          })())
                        );
                        break;
                      case 1:
                        A(H({ is_company: !0, national_id: X.serialNumber }));
                        break;
                      case 2:
                        ue(null === X || void 0 === X ? void 0 : X.position);
                        break;
                      case 3:
                        A(
                          B({
                            national_id: X.serialNumber,
                            kra_pin: X.individualKraPin,
                            is_firm: !0,
                          })
                        );
                        break;
                      case 4:
                        A(Y({ kra_pin: X.kraPin }));
                        break;
                      case 6:
                        Z(7), pe(!me);
                    }
                    var e;
                  },
                },
                r.a.createElement(
                  s.a,
                  null,
                  0 === q &&
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        C.a,
                        {
                          label: "Enter your organization KRA PIN",
                          required: !0,
                          type: "text",
                          className: "form-control pl-5",
                          name: "kraPin",
                          id: "kraPin",
                          autoFocus: !0,
                          tabIndex: 1,
                          placeholder: "Organization KRA PIN",
                          onChange: We,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "Please enter your Organization KRA PIN",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-account ml-3 icons",
                        })
                      ),
                      r.a.createElement(C.a, {
                        label: "Enter Practising License Number",
                        required: !0,
                        type: "text",
                        tabIndex: 2,
                        className: "form-control",
                        name: "licenseNumber",
                        id: "licenseNumber",
                        placeholder: "Practising License Number",
                        onChange: We,
                        validate: {
                          required: {
                            value: !0,
                            errorMessage:
                              "Please Enter Practising License Number",
                          },
                        },
                      })
                    ),
                  1 === q &&
                    r.a.createElement(
                      u.a,
                      { xs: 12 },
                      r.a.createElement(
                        "div",
                        { className: "bg-white text-" },
                        r.a.createElement(
                          "p",
                          { className: "text-muted" },
                          "Continue to register account for?"
                        ),
                        r.a.createElement(I.a, { for: "name" }, "Name: "),
                        r.a.createElement(
                          "h5",
                          null,
                          Object(h.a)(
                            null === Ue ||
                              void 0 === Ue ||
                              null === (e = Ue.data) ||
                              void 0 === e
                              ? void 0
                              : e.full_name
                          )
                        ),
                        r.a.createElement(I.a, { for: "idNumber" }, "KRA PIN:"),
                        r.a.createElement(
                          "h5",
                          null,
                          null === X || void 0 === X ? void 0 : X.kraPin
                        )
                      )
                    ),
                  1 === q &&
                    r.a.createElement(
                      u.a,
                      { lg: "12", className: "pt-3" },
                      r.a.createElement("hr", null),
                      r.a.createElement(
                        d.a,
                        {
                          placement: "right",
                          isOpen: ye,
                          target: "infoIcon",
                          toggle: function () {
                            return Ne(!ye);
                          },
                        },
                        "Kindly note that ID Number is the Number located on the RIGHT hand side of your National/Alien ID Card'"
                      ),
                      r.a.createElement(
                        C.a,
                        {
                          label: r.a.createElement(
                            r.a.Fragment,
                            null,
                            "Enter your ID Number of the appointed representative/agent",
                            r.a.createElement("i", {
                              id: "infoIcon",
                              className: "mdi mdi-information-outline pl-5",
                            })
                          ),
                          required: !0,
                          type: "text",
                          className: "form-control pl-5",
                          name: "serialNumber",
                          id: "serialNumber",
                          placeholder:
                            "Appointed Representative/Agent ID number",
                          onChange: We,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "Please enter your National ID Number if the appointed representative/agent",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-account ml-3 mt-3 icons",
                        })
                      )
                    ),
                  2 === q &&
                    r.a.createElement(
                      r.a.Fragment,
                      null,
                      r.a.createElement(
                        u.a,
                        { xs: 12 },
                        r.a.createElement(w.a, {
                          handleSelectChange: function (e) {
                            te(
                              Object(c.a)(
                                Object(c.a)({}, X),
                                {},
                                Object(i.a)({}, e.id, e.value)
                              )
                            );
                          },
                          options: [
                            {
                              value: "Director / founder",
                              label: "Director / founder",
                              id: "position",
                            },
                            {
                              value: "Manager / employee",
                              label: "Manager / employee",
                              id: "position",
                            },
                            {
                              value: "Trustee",
                              label: "Trustee",
                              id: "position",
                            },
                            { value: "Agent", label: "Agent", id: "position" },
                            {
                              value: "Legal representative",
                              label: "Legal representative",
                              id: "position",
                            },
                          ],
                          required: !0,
                          placeholder: "Select your role in the organization",
                          label: "Enter your role",
                          labelId: "role",
                          selectedValue:
                            null === X || void 0 === X ? void 0 : X.position,
                          requiredError: "Please select your role",
                        })
                      )
                    ),
                  3 === q &&
                    r.a.createElement(
                      u.a,
                      { lg: "12" },
                      r.a.createElement(
                        C.a,
                        {
                          labelFor: "email",
                          label:
                            "Enter your KRA PIN if the appointed representative/agent",
                          required: !0,
                          type: "text",
                          className: "form-control pl-5",
                          name: "individualKraPin",
                          id: "individualKraPin",
                          placeholder: "KRA PIN",
                          onChange: We,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "Please enter your KRA PIN if the appointed representative/agent",
                            },
                          },
                        },
                        r.a.createElement("i", {
                          className: "mdi mdi-account ml-3 icons",
                        })
                      )
                    ),
                  4 === q &&
                    r.a.createElement(ce, {
                      fullName:
                        null === (t = De.data) || void 0 === t
                          ? void 0
                          : t.full_name,
                      onContinue: Be,
                      regDocNumber:
                        null === X || void 0 === X ? void 0 : X.kraPin,
                      email:
                        Object(h.c)(
                          null === Ue ||
                            void 0 === Ue ||
                            null === (n = Ue.data) ||
                            void 0 === n
                            ? void 0
                            : n.email
                        ) || "No email found",
                      isLoading: Me.isLoading,
                    }),
                  5 === q &&
                    r.a.createElement(ie, {
                      isLoading: qe.isLoading,
                      handleVerifyOTP: function () {
                        var e;
                        A(
                          ((e = { kra_pin: X.kraPin, otp_code: X.passCode }),
                          (function () {
                            var t = Object(D.a)(
                              V().mark(function t(n) {
                                return V().wrap(function (t) {
                                  for (;;)
                                    switch ((t.prev = t.next)) {
                                      case 0:
                                        return (
                                          n(Object(K.eb)()),
                                          t.abrupt(
                                            "return",
                                            W.post(
                                              "".concat(
                                                G,
                                                "/api/accounts/validate_email_otp/"
                                              ),
                                              e
                                            )
                                              .then(function (e) {
                                                n(Object(K.gb)(e.data));
                                              })
                                              .catch(function (e) {
                                                var t = Object(M.a)(e);
                                                n(Object(K.fb)(t));
                                              })
                                          )
                                        );
                                      case 2:
                                      case "end":
                                        return t.stop();
                                    }
                                }, t);
                              })
                            );
                            return function (e) {
                              return t.apply(this, arguments);
                            };
                          })())
                        );
                      },
                      handleChange: We,
                      id: "passCode",
                      handleResendOTP: Be,
                      cancelOtpPage: ze,
                    }),
                  6 === q &&
                    r.a.createElement(
                      r.a.Fragment,
                      null,
                      r.a.createElement(
                        "h5",
                        { className: "mb-4" },
                        "Create your password"
                      ),
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          C.a,
                          {
                            labelFor: "password",
                            label: "Password",
                            type: "password",
                            className: "form-control pl-5",
                            name: "password",
                            id: "password",
                            placeholder: "Enter password",
                            required: !0,
                            onChange: We,
                            onKeyUp: function () {
                              var e = Object(h.d)(X.password);
                              he(
                                Object(c.a)(
                                  Object(c.a)({}, be),
                                  {},
                                  {
                                    passwordStrength:
                                      null === e || void 0 === e
                                        ? void 0
                                        : e.strength,
                                    helpText:
                                      null === e || void 0 === e
                                        ? void 0
                                        : e.message,
                                  }
                                )
                              );
                            },
                            helpText: be.helpText,
                            validate: {
                              required: {
                                value: !0,
                                errorMessage: "Please enter Password",
                              },
                              pattern: {
                                value: ".{6,}",
                                errorMessage:
                                  "Password must be at least six characters and alphanumeric",
                              },
                            },
                          },
                          r.a.createElement("i", {
                            className: "mdi mdi-key ml-3 icons",
                          })
                        )
                      ),
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          C.a,
                          {
                            labelFor: "confirmpassword",
                            label: "Confirm Password",
                            type: "password",
                            className: "form-control pl-5",
                            name: "confirmPassword",
                            id: "confirmPassword",
                            placeholder: "Confirm Password",
                            required: !0,
                            onChange: We,
                            validate: {
                              required: {
                                value: !0,
                                errorMessage: "Please enter Password",
                              },
                              match: {
                                value: "password",
                                errorMessage: "Passwords do not match",
                              },
                            },
                          },
                          r.a.createElement("i", {
                            className: "mdi mdi-key ml-3 icons",
                          })
                        )
                      ),
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          ee.a,
                          {
                            name: "signupCheck",
                            label: "",
                            required: !0,
                            validate: {
                              required: {
                                value: !0,
                                errorMessage:
                                  "Please accept terms and conditions to continue",
                              },
                            },
                          },
                          r.a.createElement(ne.a, {
                            class: "custom-control-input",
                            customInput: !0,
                            label: r.a.createElement(
                              "div",
                              null,
                              "Accept",
                              r.a.createElement(
                                "span",
                                null,
                                r.a.createElement(
                                  b.b,
                                  {
                                    target: "_blank",
                                    to: "/terms-and-conditions/all",
                                  },
                                  " ",
                                  "Terms and conditions"
                                )
                              )
                            ),
                            value: "termsAndConditions",
                          })
                        )
                      ),
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          ee.a,
                          {
                            name: "infoCheck",
                            label: "",
                            required: !0,
                            validate: {
                              required: {
                                value: !0,
                                errorMessage:
                                  "Please certify the truthiness of information provided",
                              },
                            },
                          },
                          r.a.createElement(ne.a, {
                            class: "custom-control-input",
                            customInput: !0,
                            label: r.a.createElement(
                              "div",
                              null,
                              "I certify that the information submitted in this application is true and correct to the best of my knowledge."
                            ),
                            value: "termsAndConditions",
                          })
                        )
                      )
                    ),
                  7 === q &&
                    r.a.createElement(
                      r.a.Fragment,
                      null,
                      (null === Fe ||
                      void 0 === Fe ||
                      null === (E = Fe.data) ||
                      void 0 === E
                        ? void 0
                        : E.message) &&
                        r.a.createElement(
                          u.a,
                          { xs: 12 },
                          r.a.createElement(
                            m.a,
                            { color: "success" },
                            null === Fe ||
                              void 0 === Fe ||
                              null === (y = Fe.data) ||
                              void 0 === y
                              ? void 0
                              : y.message,
                            " "
                          )
                        ),
                      r.a.createElement(R, {
                        fullName:
                          null === Ue ||
                          void 0 === Ue ||
                          null === (N = Ue.data) ||
                          void 0 === N
                            ? void 0
                            : N.business_name,
                        onContinue: He,
                        regDocNumber: X.kraPin,
                        email:
                          Object(h.c)(
                            null === Ue ||
                              void 0 === Ue ||
                              null === (O = Ue.data) ||
                              void 0 === O
                              ? void 0
                              : O.email
                          ) || "No email found",
                        isLoading: Se.isLoading,
                        phoneNumber:
                          X.phoneNumber ||
                          (null === Ue ||
                          void 0 === Ue ||
                          null === (_ = Ue.data) ||
                          void 0 === _
                            ? void 0
                            : _.mobile_number),
                        handleChangeNumber: function () {
                          return (function (e) {
                            var t;
                            A(P(e)),
                              te(
                                Object(c.a)(
                                  Object(c.a)({}, X),
                                  {},
                                  {
                                    phoneNumber:
                                      null === (t = Ue.data) || void 0 === t
                                        ? void 0
                                        : t.mobile_number,
                                  }
                                )
                              );
                          })("changeNumber");
                        },
                      })
                    )
                ),
                4 !== q &&
                  5 !== q &&
                  7 !== q &&
                  8 !== q &&
                  r.a.createElement(
                    s.a,
                    null,
                    r.a.createElement(
                      u.a,
                      {
                        lg: "12",
                        className: "mb-0",
                        style: { display: "grid", placeContent: "center" },
                      },
                      r.a.createElement(g.a, {
                        title: "Next",
                        tabIndex: 3,
                        isLoading: Ke,
                      })
                    )
                  )
              ),
              8 === q &&
                r.a.createElement(x.a, {
                  isLoading: we.isLoading || Se.isLoading,
                  OTPError: Se.error || we.error,
                  handleVerifyOTP: function () {
                    var e = X.kraPin,
                      t = X.password,
                      n = X.confirmPassword,
                      a = X.signUpOtp,
                      r = X.position,
                      o = X.serialNumber,
                      i = X.passCode,
                      l = X.phoneNumber,
                      u = X.individualKraPin,
                      s = (null === Ue || void 0 === Ue ? void 0 : Ue.data)
                        .mobile_number;
                    A(
                      (function (e, t) {
                        return (function () {
                          var n = Object(D.a)(
                            V().mark(function n(a) {
                              return V().wrap(function (n) {
                                for (;;)
                                  switch ((n.prev = n.next)) {
                                    case 0:
                                      return (
                                        a(Object(K.z)()),
                                        n.abrupt(
                                          "return",
                                          W.post(
                                            "".concat(
                                              G,
                                              "/api/accounts/register/"
                                            ),
                                            e
                                          )
                                            .then(function (e) {
                                              a(
                                                Object(K.B)(
                                                  Object(c.a)({}, e.data)
                                                )
                                              ),
                                                t.push("/login");
                                            })
                                            .catch(function (e) {
                                              var t = Object(M.a)(e);
                                              a(Object(K.A)(t));
                                            })
                                        )
                                      );
                                    case 2:
                                    case "end":
                                      return n.stop();
                                  }
                              }, n);
                            })
                          );
                          return function (e) {
                            return n.apply(this, arguments);
                          };
                        })();
                      })(
                        {
                          kra_pin: u,
                          national_id: o,
                          phone_number: null !== l && void 0 !== l ? l : s,
                          firm_profession_names: [],
                          verification_otp: a,
                          firm_verification_otp: i,
                          firm_role: r,
                          is_firm: !0,
                          password1: t,
                          password2: n,
                          nonind_kra_pin: e,
                        },
                        Ve
                      )
                    );
                  },
                  handleChange: We,
                  phoneNumber:
                    null === Ie || void 0 === Ie ? void 0 : Ie.phone_number,
                  id: "signUpOtp",
                  handleResendOTP: He,
                  cancelOtpPage: ze,
                }),
              4 !== q &&
                5 !== q &&
                7 !== q &&
                8 !== q &&
                r.a.createElement(
                  u.a,
                  { xs: "12", className: "text-center" },
                  r.a.createElement(
                    "p",
                    {
                      className: "mb-0 mt-3",
                      style: { cursor: "pointer" },
                      onClick: ze,
                    },
                    r.a.createElement(
                      "small",
                      { className: "text-dark mr-2" },
                      "Go back"
                    )
                  ),
                  r.a.createElement(
                    "p",
                    { style: { fontSize: "10px", marginTop: "1rem" } },
                    "Read about Nairobi Plan's",
                    " ",
                    r.a.createElement(
                      b.b,
                      {
                        to: "/data-privacy-policy",
                        target: "_blank",
                        type: "button",
                        style: {
                          color: "black",
                          borderBottom: "1px solid #336856",
                        },
                      },
                      "Privacy Policy"
                    ),
                    " and ",
                    r.a.createElement(
                      b.b,
                      {
                        to: "/terms-and-conditions",
                        style: {
                          color: "black",
                          borderBottom: "1px solid #336856",
                        },
                      },
                      "Terms and Conditions."
                    ),
                    " "
                  )
                ),
              r.a.createElement(j, {
                showModal: Te && "changeNumber" === Ae,
                modalTitle: "Change phone number",
                modalBody: r.a.createElement(
                  r.a.Fragment,
                  null,
                  Fe.error &&
                    r.a.createElement(m.a, { color: "danger" }, Fe.error),
                  r.a.createElement(
                    f.AvForm,
                    {
                      onValidSubmit: function () {
                        var e;
                        A(
                          z({
                            kra_pin: X.kraPin,
                            new_number:
                              null === X || void 0 === X
                                ? void 0
                                : X.phoneNumber,
                            old_number:
                              null === (e = Ue.data) || void 0 === e
                                ? void 0
                                : e.mobile_number,
                          })
                        );
                      },
                    },
                    r.a.createElement(
                      s.a,
                      null,
                      r.a.createElement(
                        u.a,
                        { lg: "12" },
                        r.a.createElement(
                          C.a,
                          {
                            icon: "mdi mdi-account ml-3 icons",
                            label: "New phone number",
                            required: !0,
                            type: "text",
                            className: "form-control pl-5 ",
                            value:
                              null === X || void 0 === X
                                ? void 0
                                : X.phoneNumber,
                            name: "phoneNumber",
                            id: "phoneNumber",
                            onChange: We,
                            placeholder: "New phone number",
                            validate: {
                              required: {
                                value: !0,
                                errorMessage:
                                  "Please enter your new phone number",
                              },
                              pattern: { value: ae.d, errorMessage: ae.e },
                            },
                          },
                          r.a.createElement("i", {
                            className: "mdi mdi-cellphone-basic ml-3 icons",
                          })
                        )
                      )
                    ),
                    r.a.createElement("hr", { className: "p-0" }),
                    r.a.createElement(
                      u.a,
                      {
                        style: {
                          display: "flex",
                          flexDirection: "row-reverse",
                        },
                      },
                      r.a.createElement(
                        g.a,
                        {
                          type: "submit",
                          className: "rounded-pill ml-3 mr-3",
                          disabled: Fe.isLoading,
                        },
                        Fe.isLoading &&
                          r.a.createElement(p.a, {
                            size: "sm",
                            className: "mb-1",
                          }),
                        r.a.createElement("i", {
                          className: "mdi mdi-content-save pr-1 ml-3",
                        }),
                        "Change number"
                      ),
                      r.a.createElement(
                        g.a,
                        {
                          outline: !0,
                          color: "primary rounded-pill pl-2 mr-3",
                          onClick: function () {
                            A({ type: "CLOSE_MODAL" });
                          },
                        },
                        r.a.createElement("i", { className: "mdi mdi-close " }),
                        "Cancel"
                      )
                    )
                  )
                ),
                actionButtonName: "Change number",
                closeOnOverlayClick: !0,
              })
            )
          );
        };
      t.default = function () {
        return "individual" ===
          (Object(o.useSelector)(function (e) {
            return e.registerUser;
          }).activeMenu || "individual")
          ? r.a.createElement(re, null)
          : r.a.createElement(le, null);
      };
    },
  },
]);
