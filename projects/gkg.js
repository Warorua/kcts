/*! For license information please see 8.9e17fb4e.chunk.js.LICENSE.txt */
(this["webpackJsonpe-constructions-portal-auth"] =
  this["webpackJsonpe-constructions-portal-auth"] || []).push([
  [8],
  {
    212: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return r;
      }),
        n.d(t, "c", function () {
          return o;
        }),
        n.d(t, "f", function () {
          return a;
        }),
        n.d(t, "g", function () {
          return i;
        }),
        n.d(t, "b", function () {
          return c;
        }),
        n.d(t, "d", function () {
          return u;
        }),
        n.d(t, "e", function () {
          return s;
        });
      var r = /^[0-9]{1,9}$/,
        o = /^[A-Z0-9]{7,9}$/,
        a = /[ `!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?~]/,
        i = /[A-Z]/,
        c = /[0-9]/,
        u = "^(?:254|\\+254|0)?([0-9](?:(?:[0-9][0-9])|(?:0[0-8]))[0-9]{6})$",
        s =
          "Phone number must be in format +2547******** or 2547******** or 07******** or 7********";
    },
    214: function (e, t, n) {
      "use strict";
      n.d(t, "e", function () {
        return o;
      }),
        n.d(t, "a", function () {
          return a;
        }),
        n.d(t, "d", function () {
          return i;
        }),
        n.d(t, "b", function () {
          return c;
        }),
        n.d(t, "c", function () {
          return u;
        });
      n(741), n(743), n(1);
      var r = n(212),
        o =
          (n(249),
          n(250),
          n(251),
          function (e) {
            return "".concat(e);
          }),
        a = function (e) {
          if (e) {
            var t,
              n,
              r,
              o,
              a,
              i,
              c =
                null === e || void 0 === e
                  ? void 0
                  : e.split(" ").filter(function (e) {
                      return e && "" !== e;
                    }),
              u = { firstName: c[0], middleName: c[1], lastName: c[2] },
              s = null === u || void 0 === u ? void 0 : u.firstName,
              l =
                null === u ||
                void 0 === u ||
                null === (t = u.middleName) ||
                void 0 === t
                  ? void 0
                  : t.replace(
                      null === u ||
                        void 0 === u ||
                        null === (n = u.middleName) ||
                        void 0 === n
                        ? void 0
                        : n.substring(1),
                      "*".repeat(
                        (null === u ||
                        void 0 === u ||
                        null === (r = u.middleName) ||
                        void 0 === r
                          ? void 0
                          : r.length) - 1
                      )
                    ),
              d =
                null === u ||
                void 0 === u ||
                null === (o = u.lastName) ||
                void 0 === o
                  ? void 0
                  : o.replace(
                      null === u ||
                        void 0 === u ||
                        null === (a = u.lastName) ||
                        void 0 === a
                        ? void 0
                        : a.substring(1),
                      "*".repeat(
                        (null === u ||
                        void 0 === u ||
                        null === (i = u.lastName) ||
                        void 0 === i
                          ? void 0
                          : i.length) - 1
                      )
                    );
            return ""
              .concat(s || "", " ")
              .concat(l || "", "  ")
              .concat(d || "");
          }
        },
        i = function (e) {
          var t = r.f.test(String(e)),
            n = r.b.test(String(e)),
            o = r.g.test(String(e));
          return e &&
            (null === e || void 0 === e ? void 0 : e.length) > 6 &&
            t &&
            n &&
            o
            ? { strength: 2, message: "Password is strong" }
            : e &&
              (null === e || void 0 === e ? void 0 : e.length) >= 6 &&
              (t || n || r.g)
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
        u = function (e) {
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
                r =
                  null === e || void 0 === e
                    ? void 0
                    : e.substring(
                        null === e || void 0 === e ? void 0 : e.lastIndexOf("@")
                      ),
                o = 0;
              o < n.length;
              o++
            )
              0 === o && 1 === n.length
                ? (t = "*")
                : 0 === o || (o === n.length - 1 && n.length > 2)
                ? (t += n[o].toString())
                : (t += "*");
            return t + r;
          }
        };
    },
    219: function (e, t, n) {
      "use strict";
      var r = n(11),
        o = n(87),
        a = n(1),
        i = n.n(a),
        c = n(427),
        u = n(224),
        s = [
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
          l = e.required,
          d = e.labelTitle,
          f = (e.labelFor, e.children),
          p = e.className,
          m = e.name,
          h = e.id,
          v = e.validate,
          g = e.helpText,
          y = Object(o.a)(e, s),
          b = Object(a.useState)(!1),
          E = Object(r.a)(b, 2),
          O = E[0],
          A = E[1],
          S = function (e) {
            var t = document.getElementById(e);
            A(!O),
              "password" === t.type ? (t.type = "text") : (t.type = "password");
          };
        return i.a.createElement(
          u.AvGroup,
          { className: "form-group position-relative" },
          d &&
            h &&
            i.a.createElement(
              c.a,
              { for: h, id: h },
              d,
              " ",
              l && i.a.createElement("span", { className: "text-danger" }, "*")
            ),
          "password" === t &&
            O &&
            i.a.createElement("i", {
              onClick: function () {
                return S(h);
              },
              className: "mdi mdi-eye ml-3 passWordIcons",
            }),
          "password" === t &&
            !O &&
            i.a.createElement("i", {
              onClick: function () {
                return S(h);
              },
              className: "mdi mdi-eye-off ml-3 passWordIcons",
            }),
          f,
          i.a.createElement(
            u.AvField,
            Object.assign(
              {
                type: t,
                className: [p].join(" "),
                name: m,
                id: h,
                placeholder: n,
                required: l,
                errorMessage: "",
                validate: v,
              },
              y
            )
          ),
          g &&
            i.a.createElement(
              c.a,
              {
                style: { top: -20, position: "relative" },
                className: "helpText",
              },
              g
            )
        );
      };
    },
    220: function (e, t, n) {
      "use strict";
      var r = n(87),
        o = n(1),
        a = n.n(o),
        i = n(296),
        c = n(196),
        u = ["isLoading", "type", "title", "disabled"];
      t.a = function (e) {
        var t = e.isLoading,
          n = e.type,
          o = e.title,
          s = e.disabled,
          l = Object(r.a)(e, u);
        return a.a.createElement(
          i.a,
          Object.assign({}, l, {
            className: "btn ".concat(n || "btn-primary ", " w-45"),
            disabled: !(!t && !s),
          }),
          !t && e.children,
          " ",
          t ? a.a.createElement(c.a, null) : o
        );
      };
    },
    222: function (e, t, n) {
      "use strict";
      n.d(t, "v", function () {
        return o;
      }),
        n.d(t, "x", function () {
          return a;
        }),
        n.d(t, "w", function () {
          return i;
        }),
        n.d(t, "y", function () {
          return c;
        }),
        n.d(t, "z", function () {
          return u;
        }),
        n.d(t, "B", function () {
          return s;
        }),
        n.d(t, "A", function () {
          return l;
        }),
        n.d(t, "g", function () {
          return d;
        }),
        n.d(t, "i", function () {
          return f;
        }),
        n.d(t, "h", function () {
          return p;
        }),
        n.d(t, "kb", function () {
          return m;
        }),
        n.d(t, "mb", function () {
          return h;
        }),
        n.d(t, "lb", function () {
          return v;
        }),
        n.d(t, "C", function () {
          return g;
        }),
        n.d(t, "E", function () {
          return y;
        }),
        n.d(t, "D", function () {
          return b;
        }),
        n.d(t, "p", function () {
          return E;
        }),
        n.d(t, "r", function () {
          return O;
        }),
        n.d(t, "q", function () {
          return A;
        }),
        n.d(t, "P", function () {
          return S;
        }),
        n.d(t, "R", function () {
          return P;
        }),
        n.d(t, "Q", function () {
          return w;
        }),
        n.d(t, "I", function () {
          return _;
        }),
        n.d(t, "K", function () {
          return N;
        }),
        n.d(t, "J", function () {
          return T;
        }),
        n.d(t, "a", function () {
          return C;
        }),
        n.d(t, "c", function () {
          return L;
        }),
        n.d(t, "b", function () {
          return R;
        }),
        n.d(t, "n", function () {
          return j;
        }),
        n.d(t, "m", function () {
          return x;
        }),
        n.d(t, "l", function () {
          return I;
        }),
        n.d(t, "j", function () {
          return U;
        }),
        n.d(t, "k", function () {
          return D;
        }),
        n.d(t, "o", function () {
          return k;
        }),
        n.d(t, "hb", function () {
          return F;
        }),
        n.d(t, "jb", function () {
          return K;
        }),
        n.d(t, "ib", function () {
          return B;
        }),
        n.d(t, "S", function () {
          return G;
        }),
        n.d(t, "U", function () {
          return H;
        }),
        n.d(t, "T", function () {
          return q;
        }),
        n.d(t, "bb", function () {
          return W;
        }),
        n.d(t, "db", function () {
          return z;
        }),
        n.d(t, "cb", function () {
          return V;
        }),
        n.d(t, "Y", function () {
          return M;
        }),
        n.d(t, "ab", function () {
          return Q;
        }),
        n.d(t, "Z", function () {
          return X;
        }),
        n.d(t, "d", function () {
          return Y;
        }),
        n.d(t, "f", function () {
          return J;
        }),
        n.d(t, "e", function () {
          return Z;
        }),
        n.d(t, "O", function () {
          return $;
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
          return re;
        }),
        n.d(t, "N", function () {
          return oe;
        }),
        n.d(t, "M", function () {
          return ae;
        }),
        n.d(t, "eb", function () {
          return ie;
        }),
        n.d(t, "gb", function () {
          return ce;
        }),
        n.d(t, "fb", function () {
          return ue;
        }),
        n.d(t, "s", function () {
          return se;
        }),
        n.d(t, "u", function () {
          return le;
        }),
        n.d(t, "t", function () {
          return de;
        }),
        n.d(t, "F", function () {
          return fe;
        }),
        n.d(t, "H", function () {
          return pe;
        }),
        n.d(t, "G", function () {
          return me;
        });
      var r = n(3),
        o = function () {
          return { type: r.s };
        },
        a = function (e) {
          return { type: r.u, response: e };
        },
        i = function (e) {
          return { type: r.t, error: e };
        },
        c = function () {
          return { type: r.v };
        },
        u = function () {
          return { type: r.w };
        },
        s = function (e) {
          return { type: r.y, response: e };
        },
        l = function (e) {
          return { type: r.x, error: e };
        },
        d = function () {
          return { type: r.e };
        },
        f = function (e) {
          return { type: r.g, response: e };
        },
        p = function (e) {
          return { type: r.f, error: e };
        },
        m = function () {
          return { type: r.S };
        },
        h = function (e) {
          return { type: r.U, response: e };
        },
        v = function (e) {
          return { type: r.T, error: e };
        },
        g = function () {
          return { type: r.z };
        },
        y = function (e) {
          return { type: r.B, response: e };
        },
        b = function (e) {
          return { type: r.A, error: e };
        },
        E = function () {
          return { type: r.o };
        },
        O = function (e) {
          return { type: r.q, response: e };
        },
        A = function (e) {
          return { type: r.p, error: e };
        },
        S = function () {
          return { type: r.I };
        },
        P = function (e) {
          return { type: r.K, response: e };
        },
        w = function (e) {
          return { type: r.J, error: e };
        },
        _ = function () {
          return { type: r.D };
        },
        N = function (e) {
          return { type: r.F, response: e };
        },
        T = function (e) {
          return { type: r.E, error: e };
        },
        C = function () {
          return { type: r.P };
        },
        L = function (e) {
          return { type: "".concat(r.P, "_SUCCESS"), response: e };
        },
        R = function (e) {
          return { type: "".concat(r.P, "_FAILURE"), error: e };
        },
        j = function () {
          return { type: r.l };
        },
        x = function () {
          return { type: r.k };
        },
        I = function () {
          return { type: r.j };
        },
        U = function () {
          return { type: r.h };
        },
        D = function () {
          return { type: r.i };
        },
        k = function () {
          return { type: r.m };
        },
        F = function () {
          return { type: r.R };
        },
        K = function (e) {
          return { type: "".concat(r.R, "_SUCCESS"), response: e };
        },
        B = function (e) {
          return { type: "".concat(r.R, "_FAILURE"), error: e };
        },
        G = function () {
          return { type: r.L };
        },
        H = function (e) {
          return { type: "".concat(r.L, "_SUCCESS"), response: e };
        },
        q = function (e) {
          return { type: "".concat(r.L, "_FAILURE"), error: e };
        },
        W = function () {
          return { type: r.O };
        },
        z = function (e) {
          return { type: "".concat(r.O, "_SUCCESS"), response: e };
        },
        V = function (e) {
          return { type: "".concat(r.O, "_FAILURE"), error: e };
        },
        M = function () {
          return { type: r.N };
        },
        Q = function (e) {
          return { type: "".concat(r.N, "_SUCCESS"), response: e };
        },
        X = function (e) {
          return { type: "".concat(r.N, "_FAILURE"), error: e };
        },
        Y = function () {
          return { type: r.a };
        },
        J = function (e) {
          return { type: "".concat(r.a, "_SUCCESS"), response: e };
        },
        Z = function (e) {
          return { type: "".concat(r.a, "_FAILURE"), error: e };
        },
        $ = function (e) {
          return { type: "SET_ACTIVE_MENU", menuType: e };
        },
        ee = function () {
          return { type: r.M };
        },
        te = function (e) {
          return { type: "".concat(r.M, "_SUCCESS"), response: e };
        },
        ne = function (e) {
          return { type: "".concat(r.M, "_FAILURE"), error: e };
        },
        re = function () {
          return { type: r.G };
        },
        oe = function (e) {
          return { type: "".concat(r.G, "_SUCCESS"), response: e };
        },
        ae = function (e) {
          return { type: "".concat(r.G, "_FAILURE"), error: e };
        },
        ie = function () {
          return { type: r.Q };
        },
        ce = function (e) {
          return { type: "".concat(r.Q, "_SUCCESS"), response: e };
        },
        ue = function (e) {
          return { type: "".concat(r.Q, "_FAILURE"), error: e };
        },
        se = function () {
          return { type: r.r };
        },
        le = function (e) {
          return { type: "".concat(r.r, "_SUCCESS"), response: e };
        },
        de = function (e) {
          return { type: "".concat(r.r, "_FAILURE"), error: e };
        },
        fe = function () {
          return { type: r.C };
        },
        pe = function (e) {
          return { type: "".concat(r.C, "_SUCCESS"), response: e };
        },
        me = function (e) {
          return { type: "".concat(r.C, "_FAILURE"), error: e };
        };
    },
    237: function (e, t, n) {
      "use strict";
      var r = {
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
      t.a = r;
    },
    238: function (e, t, n) {
      "use strict";
      t.a = function (e) {
        var t, n, r, o, a, i, c, u, s, l, d, f, p;
        e.response
          ? (t =
              e.response.data.description ||
              (null === (n = e.response.data.error) || void 0 === n
                ? void 0
                : n.description) ||
              (null === (r = e.response.data) || void 0 === r
                ? void 0
                : r.error) ||
              (null === (o = e.response.data) || void 0 === o
                ? void 0
                : o.error_message) ||
              (null === (a = e.response.data) || void 0 === a
                ? void 0
                : a.message) ||
              (null === (i = e.response.data) ||
              void 0 === i ||
              null === (c = i.data) ||
              void 0 === c
                ? void 0
                : c.description) ||
              (null === (u = e.response.data) || void 0 === u
                ? void 0
                : u.data) ||
              (null === (s = e.response.data) || void 0 === s
                ? void 0
                : s.customer_email) ||
              (null === (l = e.response.data.error) || void 0 === l
                ? void 0
                : l.password1) ||
              (null === (d = e.response.data.error) || void 0 === d
                ? void 0
                : d.password2) ||
              ((
                null === (f = e.response.data) || void 0 === f
                  ? void 0
                  : f.non_field_errors
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
      var r = n(0),
        o = n(87),
        a = n(1),
        i = n.n(a),
        c = n(448),
        u = n(427),
        s = n(219),
        l = n(444),
        d = n(364),
        f = n.n(d),
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
          a = e.placeholder,
          d = e.label,
          m = e.labelId,
          h = e.selectedValue,
          v = e.required,
          g = e.requiredError,
          y = e.isCreatableSelect,
          b = Object(o.a)(e, p),
          E = {
            control: function (e) {
              return Object(r.a)(
                Object(r.a)({}, e),
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
              return Object(r.a)(Object(r.a)({}, e), {}, { zIndex: 1e3 });
            },
          };
        return i.a.createElement(
          i.a.Fragment,
          null,
          d &&
            i.a.createElement(u.a, { for: m, className: f.a.selectLabels }, d),
          y
            ? i.a.createElement(
                l.a,
                Object.assign(
                  {
                    onChange: t,
                    options: n,
                    hideSelectedOptions: !0,
                    placeholder: a,
                    className: f.a.selectComponent,
                    styles: E,
                    theme: function (e) {
                      return Object(r.a)(
                        Object(r.a)({}, e),
                        {},
                        {
                          colors: Object(r.a)(
                            Object(r.a)({}, e.colors),
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
                  b
                )
              )
            : i.a.createElement(
                c.a,
                Object.assign(
                  {
                    onChange: t,
                    options: n,
                    hideSelectedOptions: !0,
                    placeholder: a,
                    className: f.a.selectComponent,
                    styles: E,
                    theme: function (e) {
                      return Object(r.a)(
                        Object(r.a)({}, e),
                        {},
                        {
                          colors: Object(r.a)(
                            Object(r.a)({}, e.colors),
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
                  b
                )
              ),
          i.a.createElement(s.a, {
            required: v,
            type: "text",
            className: "form-control pl-5 m-0 d-none",
            name: m,
            onChange: t,
            id: m,
            value: h,
            placeholder: a,
            validate: { required: { value: !0, errorMessage: g } },
          })
        );
      };
    },
    310: function (e, t, n) {
      "use strict";
      var r = n(11),
        o = n(1),
        a = n.n(o),
        i = n(282),
        c = n(354),
        u = n(428),
        s = n(355),
        l = n(281),
        d = n(224),
        f = n(214),
        p = n(220),
        m = n(219);
      t.a = function (e) {
        var t = e.OTPError,
          n = e.phoneNumber,
          h = e.handleVerifyOTP,
          v = e.handleChange,
          g = e.isLoading,
          y = e.isSuccessFull,
          b = e.children,
          E = e.id,
          O = e.cancelOtpPage,
          A = e.handleResendOTP,
          S = Object(o.useState)(120),
          P = Object(r.a)(S, 2),
          w = P[0],
          _ = P[1],
          N = Object(o.useState)(!1),
          T = Object(r.a)(N, 2),
          C = T[0],
          L = T[1];
        return (
          Object(o.useEffect)(
            function () {
              var e =
                w > 0 &&
                setInterval(function () {
                  return _(w - 1);
                }, 1e3);
              return function () {
                return clearInterval(e);
              };
            },
            [w]
          ),
          a.a.createElement(
            a.a.Fragment,
            null,
            a.a.createElement("h5", { className: "mb-4" }, "Verify OTP Code"),
            a.a.createElement(
              "p",
              null,
              "We have sent you an SMS with a verification code(OTP) on:"
            ),
            a.a.createElement(
              i.a,
              { xs: 12, className: "mb-4 p-0 text-center" },
              a.a.createElement("strong", null, Object(f.b)(n)),
              a.a.createElement("i", {
                id: "infoIcon",
                className: "mdi mdi-information-outline pl-5",
              })
            ),
            a.a.createElement(
              c.a,
              {
                placement: "right",
                isOpen: C,
                target: "infoIcon",
                toggle: function () {
                  return L(!C);
                },
              },
              "We have sent an OTP code to this number for verification."
            ),
            a.a.createElement(
              "div",
              { className: "text-center" },
              t && a.a.createElement(u.a, { color: "danger" }, t),
              y && a.a.createElement(s.a, { color: "success" }, b)
            ),
            a.a.createElement(
              d.AvForm,
              { className: "login-form", onSubmit: h },
              a.a.createElement(
                l.a,
                null,
                a.a.createElement(
                  i.a,
                  { lg: "12" },
                  a.a.createElement(
                    m.a,
                    {
                      labelFor: "email",
                      label: "Enter verification code",
                      required: !0,
                      type: "text",
                      tabIndex: 1,
                      className: "form-control pl-5",
                      name: "loginOtp",
                      id: E,
                      autoFocus: !0,
                      onChange: v,
                      placeholder: "Enter OTP code",
                      validate: {
                        required: {
                          value: !0,
                          errorMessage: "Please enter your OTP code",
                        },
                      },
                    },
                    a.a.createElement("i", {
                      className: "mdi mdi-lock-open ml-3 icons",
                    })
                  )
                ),
                a.a.createElement(
                  i.a,
                  { lg: "12", className: "mb-0" },
                  a.a.createElement(
                    p.a,
                    { title: "Verify Code", isLoading: g, tabIndex: 2 },
                    a.a.createElement("i", { className: "mdi mdi-lock-open" })
                  )
                ),
                a.a.createElement(
                  i.a,
                  { lg: 12 },
                  a.a.createElement(
                    l.a,
                    null,
                    a.a.createElement(
                      i.a,
                      { xs: "12", className: "text-center", tabIndex: 3 },
                      a.a.createElement(
                        "p",
                        { className: "mb-0 mt-3" },
                        0 === w &&
                          a.a.createElement(
                            "small",
                            { className: "text-dark mr-2" },
                            "Didn't receive code?"
                          ),
                        0 !== w &&
                          a.a.createElement(
                            "small",
                            { className: "text-dark mr-2" },
                            "Resend OTP after:"
                          ),
                        0 === w &&
                          a.a.createElement(
                            "span",
                            {
                              onClick: function () {
                                A(), _(120);
                              },
                              className: "text-dark font-weight-bold",
                              style: { cursor: "pointer" },
                            },
                            "Resend code"
                          ),
                        0 !== w && w
                      )
                    ),
                    a.a.createElement(
                      i.a,
                      { xs: "12", className: "text-center" },
                      a.a.createElement(
                        "div",
                        { className: "mb-0 mt-3" },
                        a.a.createElement(
                          "p",
                          {
                            onClick: O,
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
    321: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return p;
      }),
        n.d(t, "b", function () {
          return m;
        });
      var r = n(248),
        o = n(65),
        a = n.n(o),
        i = n(237),
        c = n(222),
        u = n(214),
        s = n(238);
      function l() {
        l = function () {
          return e;
        };
        var e = {},
          t = Object.prototype,
          n = t.hasOwnProperty,
          r =
            Object.defineProperty ||
            function (e, t, n) {
              e[t] = n.value;
            },
          o = "function" == typeof Symbol ? Symbol : {},
          a = o.iterator || "@@iterator",
          i = o.asyncIterator || "@@asyncIterator",
          c = o.toStringTag || "@@toStringTag";
        function u(e, t, n) {
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
          u({}, "");
        } catch (C) {
          u = function (e, t, n) {
            return (e[t] = n);
          };
        }
        function s(e, t, n, o) {
          var a = t && t.prototype instanceof p ? t : p,
            i = Object.create(a.prototype),
            c = new _(o || []);
          return r(i, "_invoke", { value: A(e, n, c) }), i;
        }
        function d(e, t, n) {
          try {
            return { type: "normal", arg: e.call(t, n) };
          } catch (C) {
            return { type: "throw", arg: C };
          }
        }
        e.wrap = s;
        var f = {};
        function p() {}
        function m() {}
        function h() {}
        var v = {};
        u(v, a, function () {
          return this;
        });
        var g = Object.getPrototypeOf,
          y = g && g(g(N([])));
        y && y !== t && n.call(y, a) && (v = y);
        var b = (h.prototype = p.prototype = Object.create(v));
        function E(e) {
          ["next", "throw", "return"].forEach(function (t) {
            u(e, t, function (e) {
              return this._invoke(t, e);
            });
          });
        }
        function O(e, t) {
          var o;
          r(this, "_invoke", {
            value: function (r, a) {
              function i() {
                return new t(function (o, i) {
                  !(function r(o, a, i, c) {
                    var u = d(e[o], e, a);
                    if ("throw" !== u.type) {
                      var s = u.arg,
                        l = s.value;
                      return l && "object" == typeof l && n.call(l, "__await")
                        ? t.resolve(l.__await).then(
                            function (e) {
                              r("next", e, i, c);
                            },
                            function (e) {
                              r("throw", e, i, c);
                            }
                          )
                        : t.resolve(l).then(
                            function (e) {
                              (s.value = e), i(s);
                            },
                            function (e) {
                              return r("throw", e, i, c);
                            }
                          );
                    }
                    c(u.arg);
                  })(r, a, o, i);
                });
              }
              return (o = o ? o.then(i, i) : i());
            },
          });
        }
        function A(e, t, n) {
          var r = "suspendedStart";
          return function (o, a) {
            if ("executing" === r)
              throw new Error("Generator is already running");
            if ("completed" === r) {
              if ("throw" === o) throw a;
              return T();
            }
            for (n.method = o, n.arg = a; ; ) {
              var i = n.delegate;
              if (i) {
                var c = S(i, n);
                if (c) {
                  if (c === f) continue;
                  return c;
                }
              }
              if ("next" === n.method) n.sent = n._sent = n.arg;
              else if ("throw" === n.method) {
                if ("suspendedStart" === r) throw ((r = "completed"), n.arg);
                n.dispatchException(n.arg);
              } else "return" === n.method && n.abrupt("return", n.arg);
              r = "executing";
              var u = d(e, t, n);
              if ("normal" === u.type) {
                if (
                  ((r = n.done ? "completed" : "suspendedYield"), u.arg === f)
                )
                  continue;
                return { value: u.arg, done: n.done };
              }
              "throw" === u.type &&
                ((r = "completed"), (n.method = "throw"), (n.arg = u.arg));
            }
          };
        }
        function S(e, t) {
          var n = t.method,
            r = e.iterator[n];
          if (void 0 === r)
            return (
              (t.delegate = null),
              ("throw" === n &&
                e.iterator.return &&
                ((t.method = "return"),
                (t.arg = void 0),
                S(e, t),
                "throw" === t.method)) ||
                ("return" !== n &&
                  ((t.method = "throw"),
                  (t.arg = new TypeError(
                    "The iterator does not provide a '" + n + "' method"
                  )))),
              f
            );
          var o = d(r, e.iterator, t.arg);
          if ("throw" === o.type)
            return (
              (t.method = "throw"), (t.arg = o.arg), (t.delegate = null), f
            );
          var a = o.arg;
          return a
            ? a.done
              ? ((t[e.resultName] = a.value),
                (t.next = e.nextLoc),
                "return" !== t.method &&
                  ((t.method = "next"), (t.arg = void 0)),
                (t.delegate = null),
                f)
              : a
            : ((t.method = "throw"),
              (t.arg = new TypeError("iterator result is not an object")),
              (t.delegate = null),
              f);
        }
        function P(e) {
          var t = { tryLoc: e[0] };
          1 in e && (t.catchLoc = e[1]),
            2 in e && ((t.finallyLoc = e[2]), (t.afterLoc = e[3])),
            this.tryEntries.push(t);
        }
        function w(e) {
          var t = e.completion || {};
          (t.type = "normal"), delete t.arg, (e.completion = t);
        }
        function _(e) {
          (this.tryEntries = [{ tryLoc: "root" }]),
            e.forEach(P, this),
            this.reset(!0);
        }
        function N(e) {
          if (e) {
            var t = e[a];
            if (t) return t.call(e);
            if ("function" == typeof e.next) return e;
            if (!isNaN(e.length)) {
              var r = -1,
                o = function t() {
                  for (; ++r < e.length; )
                    if (n.call(e, r)) return (t.value = e[r]), (t.done = !1), t;
                  return (t.value = void 0), (t.done = !0), t;
                };
              return (o.next = o);
            }
          }
          return { next: T };
        }
        function T() {
          return { value: void 0, done: !0 };
        }
        return (
          (m.prototype = h),
          r(b, "constructor", { value: h, configurable: !0 }),
          r(h, "constructor", { value: m, configurable: !0 }),
          (m.displayName = u(h, c, "GeneratorFunction")),
          (e.isGeneratorFunction = function (e) {
            var t = "function" == typeof e && e.constructor;
            return (
              !!t &&
              (t === m || "GeneratorFunction" === (t.displayName || t.name))
            );
          }),
          (e.mark = function (e) {
            return (
              Object.setPrototypeOf
                ? Object.setPrototypeOf(e, h)
                : ((e.__proto__ = h), u(e, c, "GeneratorFunction")),
              (e.prototype = Object.create(b)),
              e
            );
          }),
          (e.awrap = function (e) {
            return { __await: e };
          }),
          E(O.prototype),
          u(O.prototype, i, function () {
            return this;
          }),
          (e.AsyncIterator = O),
          (e.async = function (t, n, r, o, a) {
            void 0 === a && (a = Promise);
            var i = new O(s(t, n, r, o), a);
            return e.isGeneratorFunction(n)
              ? i
              : i.next().then(function (e) {
                  return e.done ? e.value : i.next();
                });
          }),
          E(b),
          u(b, c, "Generator"),
          u(b, a, function () {
            return this;
          }),
          u(b, "toString", function () {
            return "[object Generator]";
          }),
          (e.keys = function (e) {
            var t = Object(e),
              n = [];
            for (var r in t) n.push(r);
            return (
              n.reverse(),
              function e() {
                for (; n.length; ) {
                  var r = n.pop();
                  if (r in t) return (e.value = r), (e.done = !1), e;
                }
                return (e.done = !0), e;
              }
            );
          }),
          (e.values = N),
          (_.prototype = {
            constructor: _,
            reset: function (e) {
              if (
                ((this.prev = 0),
                (this.next = 0),
                (this.sent = this._sent = void 0),
                (this.done = !1),
                (this.delegate = null),
                (this.method = "next"),
                (this.arg = void 0),
                this.tryEntries.forEach(w),
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
              function r(n, r) {
                return (
                  (i.type = "throw"),
                  (i.arg = e),
                  (t.next = n),
                  r && ((t.method = "next"), (t.arg = void 0)),
                  !!r
                );
              }
              for (var o = this.tryEntries.length - 1; o >= 0; --o) {
                var a = this.tryEntries[o],
                  i = a.completion;
                if ("root" === a.tryLoc) return r("end");
                if (a.tryLoc <= this.prev) {
                  var c = n.call(a, "catchLoc"),
                    u = n.call(a, "finallyLoc");
                  if (c && u) {
                    if (this.prev < a.catchLoc) return r(a.catchLoc, !0);
                    if (this.prev < a.finallyLoc) return r(a.finallyLoc);
                  } else if (c) {
                    if (this.prev < a.catchLoc) return r(a.catchLoc, !0);
                  } else {
                    if (!u)
                      throw new Error("try statement without catch or finally");
                    if (this.prev < a.finallyLoc) return r(a.finallyLoc);
                  }
                }
              }
            },
            abrupt: function (e, t) {
              for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                var o = this.tryEntries[r];
                if (
                  o.tryLoc <= this.prev &&
                  n.call(o, "finallyLoc") &&
                  this.prev < o.finallyLoc
                ) {
                  var a = o;
                  break;
                }
              }
              a &&
                ("break" === e || "continue" === e) &&
                a.tryLoc <= t &&
                t <= a.finallyLoc &&
                (a = null);
              var i = a ? a.completion : {};
              return (
                (i.type = e),
                (i.arg = t),
                a
                  ? ((this.method = "next"), (this.next = a.finallyLoc), f)
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
                f
              );
            },
            finish: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.finallyLoc === e)
                  return this.complete(n.completion, n.afterLoc), w(n), f;
              }
            },
            catch: function (e) {
              for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                var n = this.tryEntries[t];
                if (n.tryLoc === e) {
                  var r = n.completion;
                  if ("throw" === r.type) {
                    var o = r.arg;
                    w(n);
                  }
                  return o;
                }
              }
              throw new Error("illegal catch attempt");
            },
            delegateYield: function (e, t, n) {
              return (
                (this.delegate = { iterator: N(e), resultName: t, nextLoc: n }),
                "next" === this.method && (this.arg = void 0),
                f
              );
            },
          }),
          e
        );
      }
      var d = Object(u.e)(i.a.REACT_APP_AUTH_URL),
        f = a.a.create();
      delete f.defaults.headers.common.Authorization;
      var p = function (e, t) {
          return (function () {
            var t = Object(r.a)(
              l().mark(function t(n) {
                return l().wrap(function (t) {
                  for (;;)
                    switch ((t.prev = t.next)) {
                      case 0:
                        return (
                          n(Object(c.v)()),
                          t.abrupt(
                            "return",
                            f
                              .post("".concat(d, "/api/accounts/login/"), e)
                              .then(function (e) {
                                var t, r, o;
                                (n(Object(c.x)(e.data)),
                                null === (t = e.data) || void 0 === t
                                  ? void 0
                                  : t.token) &&
                                  ((f.defaults.headers.common.Authorization = (
                                    null === (r = e.data) || void 0 === r
                                      ? void 0
                                      : r.token
                                  )
                                    ? "Bearer ".concat(
                                        null === (o = e.data) || void 0 === o
                                          ? void 0
                                          : o.token
                                      )
                                    : null),
                                  (window.location.pathname =
                                    "/e-construction"),
                                  localStorage.removeItem("url"),
                                  e.data.first_time_login &&
                                    (window.location.pathname =
                                      "/e-construction"));
                              })
                              .catch(function (e) {
                                var t = Object(s.a)(e);
                                n(Object(c.w)(t));
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
        m = function () {
          return (function () {
            var e = Object(r.a)(
              l().mark(function e(t) {
                return l().wrap(function (e) {
                  for (;;)
                    switch ((e.prev = e.next)) {
                      case 0:
                        t(Object(c.y)());
                      case 1:
                      case "end":
                        return e.stop();
                    }
                }, e);
              })
            );
            return function (t) {
              return e.apply(this, arguments);
            };
          })();
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
    679: function (e, t, n) {
      e.exports = n.p + "static/media/login-sider.42d550b9.png";
    },
    680: function (e, t, n) {
      e.exports = n.p + "static/media/slider.4730ee4d.jpeg";
    },
    681: function (e, t) {
      e.exports =
        "data:image/png;base64,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";
    },
    745: function (e, t, n) {
      "use strict";
      n.r(t),
        n.d(t, "mapStateToProps", function () {
          return R;
        });
      var r = n(40),
        o = n(0),
        a = n(11),
        i = n(1),
        c = n.n(i),
        u = n(54),
        s = n(15),
        l = n(53),
        d = n(282),
        f = n(281),
        p = n(354),
        m = n(428),
        h = n(355),
        v = n(224),
        g = (n(305), n(247)),
        y = function (e) {
          return c.a.createElement(
            c.a.Fragment,
            null,
            c.a.createElement(
              "section",
              {
                className:
                  "auth-page_wrapper d-flex  h-100  justify-content-center",
              },
              c.a.createElement(
                g.a,
                null,
                c.a.createElement(
                  f.a,
                  {
                    className: "authContainer shadow ".concat(
                      e.customStylesClass
                    ),
                    style: { marginTop: "10rem" },
                  },
                  c.a.createElement(
                    d.a,
                    { xs: 12, md: 12, lg: 7, className: "form-area p-5" },
                    e.children
                  ),
                  c.a.createElement(d.a, {
                    xs: 12,
                    md: 12,
                    lg: 5,
                    className:
                      "p-0 form-sider d-none d-md-none d-lg-block auth-form-sider",
                    style: {
                      backgroundImage: "url(".concat(e.sideImage, ")"),
                      backgroundColor: "#F7F7F7",
                      backgroundRepeat: "no-repeat",
                      backgroundSize: "100%",
                    },
                  })
                ),
                c.a.createElement(
                  "h1",
                  { className: "text-center", style: { color: "#336856" } },
                  "Let's make Nairobi work"
                )
              )
            )
          );
        },
        b = n(220),
        E = n(219),
        O = n(310),
        A = (n(679), n(680)),
        S = n.n(A),
        P = (n(681), n(311), n(312)),
        w = n.n(P),
        _ = function (e) {
          var t = e.handleLogin,
            n = e.handleVerifyOTP,
            o = e.handleChange,
            u = e.isLoading,
            s = e.clearErrors,
            g = e.handleResendOTP,
            A = e.cancelOtpPage,
            P = e.registerUserSuccess,
            _ = e.message,
            N = e.userState,
            T = e.activeMenu,
            C = e.handleActiveMenu,
            L = (e.handleSelectChange, N.loginError),
            R = N.isOtpSent,
            j = N.phoneNumber,
            x = Object(i.useState)(!1),
            I = Object(a.a)(x, 2),
            U = I[0],
            D = I[1];
          return c.a.createElement(
            y,
            { sideImage: S.a, customStylesClass: w.a.loginContainer },
            !R &&
              c.a.createElement(
                c.a.Fragment,
                null,
                c.a.createElement(
                  d.a,
                  { xs: "13", className: "text-right" },
                  c.a.createElement(
                    "p",
                    { className: "mb-3 mt-0" },
                    c.a.createElement(
                      "small",
                      { className: "text-dark mr-2" },
                      "Don't have an account ?"
                    ),
                    c.a.createElement(
                      l.b,
                      {
                        style: { color: "#078930" },
                        to: "/signup",
                        className: "font-weight-bold",
                        tabIndex: 5,
                      },
                      "Sign Up"
                    )
                  )
                ),
                c.a.createElement(
                  "h4",
                  { className: "mb-4 text-center" },
                  "SIGN IN"
                ),
                c.a.createElement(
                  f.a,
                  { className: "pl-3 pr-3 pb-3 align-items-center" },
                  c.a.createElement(
                    d.a,
                    {
                      onClick: C,
                      id: "INDI",
                      className: "shadow border rounded mr-2 text-center  "
                        .concat(w.a.accountSelect, " ")
                        .concat("INDI" === T && w.a.selected),
                    },
                    c.a.createElement("p", { className: "mt-3" }, "Individual")
                  ),
                  c.a.createElement(
                    d.a,
                    {
                      onClick: C,
                      id: "NONINDI",
                      className: "shadow border rounded ml-2 text-center  "
                        .concat(w.a.accountSelect, " ")
                        .concat("NONINDI" === T && w.a.selected),
                    },
                    c.a.createElement(
                      "p",
                      { className: "mt-3" },
                      "Non-individual"
                    )
                  ),
                  c.a.createElement("i", {
                    id: "accountType",
                    className: "mdi mdi-information-outline pl-5",
                  }),
                  c.a.createElement(
                    p.a,
                    {
                      placement: "top",
                      isOpen: U,
                      target: "accountType",
                      toggle: function () {
                        return D(!U);
                      },
                    },
                    "Use Individual tab if account belongs to an individual or a sole- proprietorship only. All other organizations and business types should use Non-Individual tab"
                  )
                ),
                c.a.createElement(
                  "div",
                  { className: "text-center" },
                  L &&
                    c.a.createElement(m.a, { toggle: s, color: "danger" }, L),
                  P && !u && c.a.createElement(h.a, { color: "success" }, _)
                ),
                c.a.createElement(
                  v.AvForm,
                  { className: "login-form", onValidSubmit: t },
                  c.a.createElement(
                    f.a,
                    null,
                    c.a.createElement(
                      d.a,
                      { lg: "12" },
                      c.a.createElement(
                        E.a,
                        {
                          icon: "mdi mdi-account ml-3 icons",
                          label:
                            "INDI" === T
                              ? "Your National ID / KRA PIN / Professional Number"
                              : "Organisation KRA PIN",
                          required: !0,
                          type: "text",
                          className: "form-control pl-5",
                          name: "username",
                          id: "username",
                          autoFocus: !0,
                          tabIndex: 1,
                          onChange: o,
                          placeholder:
                            "INDI" === T
                              ? "Enter Your National ID / KRA PIN / Professional Number"
                              : "Organisation KRA PIN",
                          validate: {
                            required: {
                              value: !0,
                              errorMessage:
                                "INDI" === T
                                  ? "Please enter your National ID / KRA PIN / Professional Number"
                                  : "Please enter your KRA PIN",
                            },
                          },
                        },
                        c.a.createElement("i", {
                          className: "mdi mdi-account ml-3 icons",
                        })
                      )
                    ),
                    c.a.createElement(
                      d.a,
                      { lg: "12" },
                      c.a.createElement(
                        E.a,
                        {
                          label: "Password",
                          required: !0,
                          type: "password",
                          className: "form-control pl-5",
                          name: "password",
                          id: "password",
                          tabIndex: 2,
                          placeholder: "Enter password",
                          onChange: o,
                          validate: {
                            required: {
                              value: !0,
                              errorMessage: "Please enter Password",
                            },
                          },
                        },
                        c.a.createElement("i", {
                          className: "mdi mdi-key ml-3 icons",
                        })
                      )
                    ),
                    c.a.createElement(
                      d.a,
                      { lg: "12" },
                      c.a.createElement(
                        "p",
                        { className: "float-right forgot-pass", tabIndex: 4 },
                        c.a.createElement(
                          l.b,
                          {
                            to: "/recover-password",
                            className: "text-dark font-weight-bold",
                          },
                          "Forgot password ?"
                        )
                      )
                    ),
                    c.a.createElement(
                      d.a,
                      {
                        lg: "12",
                        style: { display: "grid", placeContent: "center" },
                      },
                      c.a.createElement(
                        b.a,
                        {
                          style: Object(r.a)(
                            { width: "20%", margin: "auto" },
                            "width",
                            100
                          ),
                          title: "Next",
                          isLoading: u,
                          tabIndex: 3,
                        },
                        c.a.createElement("i", { title: "Login" })
                      ),
                      c.a.createElement(
                        "p",
                        { style: { fontSize: "10px", marginTop: "1rem" } },
                        "Read about Nairobi Plan's",
                        " ",
                        c.a.createElement(
                          l.b,
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
                        c.a.createElement(
                          l.b,
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
                  )
                ),
                " "
              ),
            R &&
              c.a.createElement(O.a, {
                isLoading: u,
                OTPError: L,
                handleVerifyOTP: n,
                handleChange: o,
                phoneNumber: j,
                id: "loginOtp",
                handleResendOTP: g,
                cancelOtpPage: A,
              })
          );
        },
        N = n(321),
        T = n(248),
        C = n(222);
      function L() {
        L = function () {
          return e;
        };
        var e = {},
          t = Object.prototype,
          n = t.hasOwnProperty,
          r =
            Object.defineProperty ||
            function (e, t, n) {
              e[t] = n.value;
            },
          o = "function" == typeof Symbol ? Symbol : {},
          a = o.iterator || "@@iterator",
          i = o.asyncIterator || "@@asyncIterator",
          c = o.toStringTag || "@@toStringTag";
        function u(e, t, n) {
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
          u({}, "");
        } catch (T) {
          u = function (e, t, n) {
            return (e[t] = n);
          };
        }
        function s(e, t, n, o) {
          var a = t && t.prototype instanceof f ? t : f,
            i = Object.create(a.prototype),
            c = new w(o || []);
          return r(i, "_invoke", { value: O(e, n, c) }), i;
        }
        function l(e, t, n) {
          try {
            return { type: "normal", arg: e.call(t, n) };
          } catch (T) {
            return { type: "throw", arg: T };
          }
        }
        e.wrap = s;
        var d = {};
        function f() {}
        function p() {}
        function m() {}
        var h = {};
        u(h, a, function () {
          return this;
        });
        var v = Object.getPrototypeOf,
          g = v && v(v(_([])));
        g && g !== t && n.call(g, a) && (h = g);
        var y = (m.prototype = f.prototype = Object.create(h));
        function b(e) {
          ["next", "throw", "return"].forEach(function (t) {
            u(e, t, function (e) {
              return this._invoke(t, e);
            });
          });
        }
        function E(e, t) {
          var o;
          r(this, "_invoke", {
            value: function (r, a) {
              function i() {
                return new t(function (o, i) {
                  !(function r(o, a, i, c) {
                    var u = l(e[o], e, a);
                    if ("throw" !== u.type) {
                      var s = u.arg,
                        d = s.value;
                      return d && "object" == typeof d && n.call(d, "__await")
                        ? t.resolve(d.__await).then(
                            function (e) {
                              r("next", e, i, c);
                            },
                            function (e) {
                              r("throw", e, i, c);
                            }
                          )
                        : t.resolve(d).then(
                            function (e) {
                              (s.value = e), i(s);
                            },
                            function (e) {
                              return r("throw", e, i, c);
                            }
                          );
                    }
                    c(u.arg);
                  })(r, a, o, i);
                });
              }
              return (o = o ? o.then(i, i) : i());
            },
          });
        }
        function O(e, t, n) {
          var r = "suspendedStart";
          return function (o, a) {
            if ("executing" === r)
              throw new Error("Generator is already running");
            if ("completed" === r) {
              if ("throw" === o) throw a;
              return N();
            }
            for (n.method = o, n.arg = a; ; ) {
              var i = n.delegate;
              if (i) {
                var c = A(i, n);
                if (c) {
                  if (c === d) continue;
                  return c;
                }
              }
              if ("next" === n.method) n.sent = n._sent = n.arg;
              else if ("throw" === n.method) {
                if ("suspendedStart" === r) throw ((r = "completed"), n.arg);
                n.dispatchException(n.arg);
              } else "return" === n.method && n.abrupt("return", n.arg);
              r = "executing";
              var u = l(e, t, n);
              if ("normal" === u.type) {
                if (
                  ((r = n.done ? "completed" : "suspendedYield"), u.arg === d)
                )
                  continue;
                return { value: u.arg, done: n.done };
              }
              "throw" === u.type &&
                ((r = "completed"), (n.method = "throw"), (n.arg = u.arg));
            }
          };
        }
        function A(e, t) {
          var n = t.method,
            r = e.iterator[n];
          if (void 0 === r)
            return (
              (t.delegate = null),
              ("throw" === n &&
                e.iterator.return &&
                ((t.method = "return"),
                (t.arg = void 0),
                A(e, t),
                "throw" === t.method)) ||
                ("return" !== n &&
                  ((t.method = "throw"),
                  (t.arg = new TypeError(
                    "The iterator does not provide a '" + n + "' method"
                  )))),
              d
            );
          var o = l(r, e.iterator, t.arg);
          if ("throw" === o.type)
            return (
              (t.method = "throw"), (t.arg = o.arg), (t.delegate = null), d
            );
          var a = o.arg;
          return a
            ? a.done
              ? ((t[e.resultName] = a.value),
                (t.next = e.nextLoc),
                "return" !== t.method &&
                  ((t.method = "next"), (t.arg = void 0)),
                (t.delegate = null),
                d)
              : a
            : ((t.method = "throw"),
              (t.arg = new TypeError("iterator result is not an object")),
              (t.delegate = null),
              d);
        }
        function S(e) {
          var t = { tryLoc: e[0] };
          1 in e && (t.catchLoc = e[1]),
            2 in e && ((t.finallyLoc = e[2]), (t.afterLoc = e[3])),
            this.tryEntries.push(t);
        }
        function P(e) {
          var t = e.completion || {};
          (t.type = "normal"), delete t.arg, (e.completion = t);
        }
        function w(e) {
          (this.tryEntries = [{ tryLoc: "root" }]),
            e.forEach(S, this),
            this.reset(!0);
        }
        function _(e) {
          if (e) {
            var t = e[a];
            if (t) return t.call(e);
            if ("function" == typeof e.next) return e;
            if (!isNaN(e.length)) {
              var r = -1,
                o = function t() {
                  for (; ++r < e.length; )
                    if (n.call(e, r)) return (t.value = e[r]), (t.done = !1), t;
                  return (t.value = void 0), (t.done = !0), t;
                };
              return (o.next = o);
            }
          }
          return { next: N };
        }
        function N() {
          return { value: void 0, done: !0 };
        }
        return (
          (p.prototype = m),
          r(y, "constructor", { value: m, configurable: !0 }),
          r(m, "constructor", { value: p, configurable: !0 }),
          (p.displayName = u(m, c, "GeneratorFunction")),
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
                ? Object.setPrototypeOf(e, m)
                : ((e.__proto__ = m), u(e, c, "GeneratorFunction")),
              (e.prototype = Object.create(y)),
              e
            );
          }),
          (e.awrap = function (e) {
            return { __await: e };
          }),
          b(E.prototype),
          u(E.prototype, i, function () {
            return this;
          }),
          (e.AsyncIterator = E),
          (e.async = function (t, n, r, o, a) {
            void 0 === a && (a = Promise);
            var i = new E(s(t, n, r, o), a);
            return e.isGeneratorFunction(n)
              ? i
              : i.next().then(function (e) {
                  return e.done ? e.value : i.next();
                });
          }),
          b(y),
          u(y, c, "Generator"),
          u(y, a, function () {
            return this;
          }),
          u(y, "toString", function () {
            return "[object Generator]";
          }),
          (e.keys = function (e) {
            var t = Object(e),
              n = [];
            for (var r in t) n.push(r);
            return (
              n.reverse(),
              function e() {
                for (; n.length; ) {
                  var r = n.pop();
                  if (r in t) return (e.value = r), (e.done = !1), e;
                }
                return (e.done = !0), e;
              }
            );
          }),
          (e.values = _),
          (w.prototype = {
            constructor: w,
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
              function r(n, r) {
                return (
                  (i.type = "throw"),
                  (i.arg = e),
                  (t.next = n),
                  r && ((t.method = "next"), (t.arg = void 0)),
                  !!r
                );
              }
              for (var o = this.tryEntries.length - 1; o >= 0; --o) {
                var a = this.tryEntries[o],
                  i = a.completion;
                if ("root" === a.tryLoc) return r("end");
                if (a.tryLoc <= this.prev) {
                  var c = n.call(a, "catchLoc"),
                    u = n.call(a, "finallyLoc");
                  if (c && u) {
                    if (this.prev < a.catchLoc) return r(a.catchLoc, !0);
                    if (this.prev < a.finallyLoc) return r(a.finallyLoc);
                  } else if (c) {
                    if (this.prev < a.catchLoc) return r(a.catchLoc, !0);
                  } else {
                    if (!u)
                      throw new Error("try statement without catch or finally");
                    if (this.prev < a.finallyLoc) return r(a.finallyLoc);
                  }
                }
              }
            },
            abrupt: function (e, t) {
              for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                var o = this.tryEntries[r];
                if (
                  o.tryLoc <= this.prev &&
                  n.call(o, "finallyLoc") &&
                  this.prev < o.finallyLoc
                ) {
                  var a = o;
                  break;
                }
              }
              a &&
                ("break" === e || "continue" === e) &&
                a.tryLoc <= t &&
                t <= a.finallyLoc &&
                (a = null);
              var i = a ? a.completion : {};
              return (
                (i.type = e),
                (i.arg = t),
                a
                  ? ((this.method = "next"), (this.next = a.finallyLoc), d)
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
                  var r = n.completion;
                  if ("throw" === r.type) {
                    var o = r.arg;
                    P(n);
                  }
                  return o;
                }
              }
              throw new Error("illegal catch attempt");
            },
            delegateYield: function (e, t, n) {
              return (
                (this.delegate = { iterator: _(e), resultName: t, nextLoc: n }),
                "next" === this.method && (this.arg = void 0),
                d
              );
            },
          }),
          e
        );
      }
      var R = function (e) {
          return {
            user: e.user,
            registerUser: e.registerUser,
            resetPassword: e.resetPassword,
          };
        },
        j = {
          loginUserAction: N.a,
          clearLogin: function () {
            return (function () {
              var e = Object(T.a)(
                L().mark(function e(t) {
                  return L().wrap(function (e) {
                    for (;;)
                      switch ((e.prev = e.next)) {
                        case 0:
                          t(Object(C.l)());
                        case 1:
                        case "end":
                          return e.stop();
                      }
                  }, e);
                })
              );
              return function (t) {
                return e.apply(this, arguments);
              };
            })();
          },
          clearRegisterUser: function () {
            return (function () {
              var e = Object(T.a)(
                L().mark(function e(t) {
                  return L().wrap(function (e) {
                    for (;;)
                      switch ((e.prev = e.next)) {
                        case 0:
                          t(Object(C.n)());
                        case 1:
                        case "end":
                          return e.stop();
                      }
                  }, e);
                })
              );
              return function (t) {
                return e.apply(this, arguments);
              };
            })();
          },
          clearResetPassword: function () {
            return (function () {
              var e = Object(T.a)(
                L().mark(function e(t) {
                  return L().wrap(function (e) {
                    for (;;)
                      switch ((e.prev = e.next)) {
                        case 0:
                          t(Object(C.o)());
                        case 1:
                        case "end":
                          return e.stop();
                      }
                  }, e);
                })
              );
              return function (t) {
                return e.apply(this, arguments);
              };
            })();
          },
        };
      t.default = Object(s.h)(
        Object(u.connect)(R, j)(function (e) {
          var t = e.user,
            n = e.loginUserAction,
            u = e.history,
            s = e.clearLogin,
            l = e.registerUser,
            d = e.clearRegisterUser,
            f = e.clearResetPassword,
            p = e.resetPassword,
            m = Object(i.useState)("INDI"),
            h = Object(a.a)(m, 2),
            v = h[0],
            g = h[1],
            y = Object(i.useState)({}),
            b = Object(a.a)(y, 2),
            E = b[0],
            O = b[1],
            A = Object(i.useState)({
              loginError: null === t || void 0 === t ? void 0 : t.error,
              isOtpSent: null === t || void 0 === t ? void 0 : t.isOtpSent,
              phoneNumber: t.phone_number,
              registrationSuccess: l.isSuccessFull,
              resetPasswordSuccess: p.isSuccessFull,
            }),
            S = Object(a.a)(A, 2),
            P = S[0],
            w = S[1];
          Object(i.useEffect)(
            function () {
              var e, n, r;
              w(
                Object(o.a)(
                  Object(o.a)({}, P),
                  {},
                  {
                    loginError:
                      t.error ||
                      (!t.isOtpSent &&
                        (null === (e = t.currentUser) || void 0 === e
                          ? void 0
                          : e.phone_number) &&
                        "Error sending OTP, please try again later") ||
                      (!t.isOtpSent &&
                        null ===
                          (null === (n = t.currentUser) || void 0 === n
                            ? void 0
                            : n.phone_number) &&
                        !t.isLoading &&
                        "To continue with registration, Kindly visit nearest KRA center to update your phone number"),
                    isOtpSent:
                      null === t || void 0 === t ? void 0 : t.isOtpSent,
                    phoneNumber:
                      null === (r = t.currentUser) || void 0 === r
                        ? void 0
                        : r.phone_number,
                    registrationSuccess: l.isSuccessFull,
                    resetPasswordSuccess: p.isSuccessFull,
                  }
                )
              );
            },
            [t]
          );
          var N = function () {
            w(
              Object(o.a)(
                Object(o.a)({}, P),
                {},
                {
                  loginError: "",
                  registrationSuccess: !1,
                  resetPasswordSuccess: !1,
                }
              )
            );
          };
          Object(i.useEffect)(
            function () {
              N(), C();
            },
            [u.pathname]
          );
          var T = function (e) {
              var t;
              n(
                Object(o.a)(
                  Object(o.a)({}, E),
                  {},
                  {
                    username:
                      null === E ||
                      void 0 === E ||
                      null === (t = E.username) ||
                      void 0 === t
                        ? void 0
                        : t.toUpperCase(),
                    otp_code: E.loginOtp,
                  }
                ),
                u
              ),
                d(),
                f();
            },
            C = function () {
              s(), w(Object(o.a)(Object(o.a)({}, P), {}, { isOtpSent: !1 }));
            };
          return c.a.createElement(_, {
            userState: P,
            isLoading: t.isLoading,
            handleVerifyOTP: T,
            phoneNumber: P.phoneNumber,
            handleChange: function (e) {
              O(
                Object(o.a)(
                  Object(o.a)({}, E),
                  {},
                  Object(r.a)({}, e.target.id, e.target.value)
                )
              ),
                w(
                  Object(o.a)(
                    Object(o.a)({}, P),
                    {},
                    { registrationSuccess: !1, resetPasswordSuccess: !1 }
                  )
                ),
                N();
            },
            handleLogin: T,
            clearErrors: N,
            handleResendOTP: function () {
              n(
                {
                  password: E.password,
                  username: E.username,
                  tax_payer_type: v,
                },
                u
              );
            },
            cancelOtpPage: C,
            activeMenu: v,
            handleActiveMenu: function (e) {
              g(e.currentTarget.id), N();
            },
            registerUserSuccess:
              P.registrationSuccess || P.resetPasswordSuccess,
            message: P.registrationSuccess
              ? "Account created successfully. Please Login"
              : P.resetPasswordSuccess
              ? "Password was reset successfully. Please Login"
              : void 0,
          });
        })
      );
    },
  },
]);
