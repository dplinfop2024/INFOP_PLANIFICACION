PGDMP  3    ;                |            INFOP_Planificacion    16.3    16.3 I    N           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            O           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            P           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            Q           1262    33672    INFOP_Planificacion    DATABASE     �   CREATE DATABASE "INFOP_Planificacion" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Honduras.1252';
 %   DROP DATABASE "INFOP_Planificacion";
                postgres    false                      0    34151    cargos 
   TABLE DATA           D   COPY public.cargos (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    222   �D                 0    34247    componentes 
   TABLE DATA           Q   COPY public.componentes (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    235   E                 0    34256    lineas_estrategicas 
   TABLE DATA           m   COPY public.lineas_estrategicas (id, id_componente, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    237   �E       
          0    34133    tipos_unidades 
   TABLE DATA           L   COPY public.tipos_unidades (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �F                 0    34142    tipos_usuarios 
   TABLE DATA           L   COPY public.tipos_usuarios (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    220   �F                 0    34160    users 
   TABLE DATA           �   COPY public.users (id, id_unidad, id_tipo_usuario, id_tipo_unidad, nombre_unidad, nombre, id_cargo, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    224   RG                 0    34270    poas 
   TABLE DATA           o   COPY public.poas (id, id_usuario, anio, id_componente, aceptado, aprobado, created_at, updated_at) FROM stdin;
    public          postgres    false    239   �I       #          0    34306    metas_administrativas 
   TABLE DATA           �   COPY public.metas_administrativas (id, id_poa, id_linea, descripcion, unidad_medida, numero, programacion_anual, presupuesto_meta, created_at, updated_at) FROM stdin;
    public          postgres    false    243   J       =          0    34469    avances_metas_administrativas 
   TABLE DATA           o   COPY public.avances_metas_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    269   �K       !          0    34287    metas_operativas 
   TABLE DATA           �   COPY public.metas_operativas (id, id_poa, id_linea, descripcion, unidad_medida, numero, cursos, participantes, horas, presupuesto_meta, created_at, updated_at) FROM stdin;
    public          postgres    false    241   �K       ;          0    34457    avances_metas_operativas 
   TABLE DATA           z   COPY public.avances_metas_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    267   L                 0    34203    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    227   "L                 0    34210    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    228   ?L       A          0    34495    evidencias_paccs 
   TABLE DATA           Y   COPY public.evidencias_paccs (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    273   \L       ?          0    34481    evidencias_poas 
   TABLE DATA           X   COPY public.evidencias_poas (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    271   yL                 0    34235    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    233   �L       )          0    34349    presupuestos 
   TABLE DATA           [   COPY public.presupuestos (id, id_usuario, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    249   �L       1          0    34397     presupuestos_maquinarias_equipos 
   TABLE DATA           s   COPY public.presupuestos_maquinarias_equipos (id, id_presupuesto, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    257   �L       3          0    34409    renglones_maquinarias_equipos 
   TABLE DATA           h   COPY public.renglones_maquinarias_equipos (id, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    259   �L       5          0    34416    gastos_maquinarias_equipos 
   TABLE DATA           �   COPY public.gastos_maquinarias_equipos (id, id_presupuesto_me, id_renglon, descripcion, valor, cantidad, created_at, updated_at) FROM stdin;
    public          postgres    false    261   
M       7          0    34433    paccs 
   TABLE DATA           L   COPY public.paccs (id, id_unidad, anio, created_at, updated_at) FROM stdin;
    public          postgres    false    263   'M       9          0    34445    gastos_paccs 
   TABLE DATA           �   COPY public.gastos_paccs (id, id_pacc, numero, renglon, descripcion, monto, unidad, fecha_entrega, created_at, updated_at) FROM stdin;
    public          postgres    false    265   DM       +          0    34361    grupos_presupuestos 
   TABLE DATA           Y   COPY public.grupos_presupuestos (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    251   aM       -          0    34368    subgrupos_presupuestos 
   TABLE DATA           f   COPY public.subgrupos_presupuestos (id, id_grupo, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    253   ~M       /          0    34380    gastos_presupuestos 
   TABLE DATA           m   COPY public.gastos_presupuestos (id, id_presupuesto, id_subgrupo, valor, created_at, updated_at) FROM stdin;
    public          postgres    false    255   �M                 0    34227    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    231   �M                 0    34218    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    230   �M       G          0    34535    metas_reportes_administrativos 
   TABLE DATA           �   COPY public.metas_reportes_administrativos (id, id_meta, porcentaje_trimestral, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    279   �M       E          0    34521    metas_reportes_operativos 
   TABLE DATA           �   COPY public.metas_reportes_operativos (id, id_meta, porcentaje_cursos, porcentaje_participantes, porcentaje_horas, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    277   N                 0    34126 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   ,N       K          0    34563    notificaciones 
   TABLE DATA           z   COPY public.notificaciones (id, id_usuario, id_remitente, tipo_notificacion, mensaje, created_at, updated_at) FROM stdin;
    public          postgres    false    283   �O                 0    34187    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    225   �O       '          0    34337    programaciones_administrativas 
   TABLE DATA           p   COPY public.programaciones_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    247   
P       %          0    34325    programaciones_operativas 
   TABLE DATA           {   COPY public.programaciones_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    245   dP       C          0    34509    reportes_poas 
   TABLE DATA           V   COPY public.reportes_poas (id, id_poa, trimestre, created_at, updated_at) FROM stdin;
    public          postgres    false    275   �P       I          0    34549    reportes_presupuestos 
   TABLE DATA           �   COPY public.reportes_presupuestos (id, id_presupuesto, trimestre, total_ejecutado, total_disponible, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    281   �P                 0    34194    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    226   �P       R           0    0 $   avances_metas_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.avances_metas_administrativas_id_seq', 1, false);
          public          postgres    false    268            S           0    0    avances_metas_operativas_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.avances_metas_operativas_id_seq', 1, false);
          public          postgres    false    266            T           0    0    cargos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cargos_id_seq', 3, true);
          public          postgres    false    221            U           0    0    componentes_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.componentes_id_seq', 6, true);
          public          postgres    false    234            V           0    0    evidencias_paccs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.evidencias_paccs_id_seq', 1, false);
          public          postgres    false    272            W           0    0    evidencias_poas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.evidencias_poas_id_seq', 1, false);
          public          postgres    false    270            X           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    232            Y           0    0 !   gastos_maquinarias_equipos_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gastos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    260            Z           0    0    gastos_paccs_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.gastos_paccs_id_seq', 1, false);
          public          postgres    false    264            [           0    0    gastos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.gastos_presupuestos_id_seq', 1, false);
          public          postgres    false    254            \           0    0    grupos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.grupos_presupuestos_id_seq', 1, false);
          public          postgres    false    250            ]           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    229            ^           0    0    lineas_estrategicas_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.lineas_estrategicas_id_seq', 19, true);
          public          postgres    false    236            _           0    0    metas_administrativas_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.metas_administrativas_id_seq', 7, true);
          public          postgres    false    242            `           0    0    metas_operativas_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.metas_operativas_id_seq', 1, false);
          public          postgres    false    240            a           0    0 %   metas_reportes_administrativos_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.metas_reportes_administrativos_id_seq', 1, false);
          public          postgres    false    278            b           0    0     metas_reportes_operativos_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.metas_reportes_operativos_id_seq', 1, false);
          public          postgres    false    276            c           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 30, true);
          public          postgres    false    215            d           0    0    notificaciones_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.notificaciones_id_seq', 1, false);
          public          postgres    false    282            e           0    0    paccs_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.paccs_id_seq', 1, false);
          public          postgres    false    262            f           0    0    poas_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.poas_id_seq', 5, true);
          public          postgres    false    238            g           0    0    presupuestos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.presupuestos_id_seq', 1, false);
          public          postgres    false    248            h           0    0 '   presupuestos_maquinarias_equipos_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.presupuestos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    256            i           0    0 %   programaciones_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.programaciones_administrativas_id_seq', 8, true);
          public          postgres    false    246            j           0    0     programaciones_operativas_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.programaciones_operativas_id_seq', 1, false);
          public          postgres    false    244            k           0    0 $   renglones_maquinarias_equipos_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.renglones_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    258            l           0    0    reportes_poas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.reportes_poas_id_seq', 1, false);
          public          postgres    false    274            m           0    0    reportes_presupuestos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.reportes_presupuestos_id_seq', 1, false);
          public          postgres    false    280            n           0    0    subgrupos_presupuestos_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.subgrupos_presupuestos_id_seq', 1, false);
          public          postgres    false    252            o           0    0    tipos_unidades_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_unidades_id_seq', 2, true);
          public          postgres    false    217            p           0    0    tipos_usuarios_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_usuarios_id_seq', 6, true);
          public          postgres    false    219            q           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 14, true);
          public          postgres    false    223               Z   x�3��JMKUpI-H,*I�M�+��4202�50�5�T0��20�2��&�e�霟_������_D�.CL��Ӌs�3o�#ڤ=... �U/�         �   x�m�1�0Eg��@Q��)d��"��RH$֎��_�-"^������z�ۺ}VC������:G+ѫ|�V%B�CV�^c@�P��m��`��p��9�����,9������.q�>O���0A�         �   x�m���0kq�,`C$%[�!M�i���"���qa|����~��E����������	,qO��i�e�����&ܻ�E�Sb�^3F��:�93F��:�Ք��<TC(W���͈����b$)#���u�����Z���,UQ!6��b��zƈ;Du1I�IEg�?;<��T�62F< ��!UL�ws3�	Q]���NDܥ�      
   ;   x�3�tL����,.)J,�,K�4202�50�5�T0��20�2��&�e��_�J��=... Y�         m   x�3���LIL�4202�50�5�T0��20�2��&�e�P��^�������G�6cNǔ�̼��"�4���+KMM)-�L$Z�)�kYbN)iV�q�$�e�e&��/F��� ӌJ�         p  x�m��r�@���.܆�
�qTD�lZi��pSy�y�y����2ػ�s���:��G  �ia%�ݞ���A�,������W�q!���)���%�gn}��P���on��<m��SQ�N��oE��j~X�������t&���34þУF�1���9���EdZN�%�Q��()��*O�������8{0;ĕ�$�nu�3_@T�L�	�My;{���
G	W�m�V��*A���x4�x�F��m�Yq��[��s�^�כ����n�ȷ��J���Qʊ}	�rdE������\ьt
�+�i��`@ ��庼J�
�/��:���['.��!e�狠�A�yM��1��<�:����f�m*I2԰����H 0hi[hBt� 	�2ow3�~�NU�UL�}^�g^'[yc3�^}�f�	v�c�����9�*?f���������*�IpN?������[i��K%jv!EN}��:�|q,�Yf�[��bD�N� ��B�-���w��	�:�.z�m��&�K	�<�������6qP�����1�ni�G�Ҡ�]7�qÁz��b;�s��* �0L���N�Xpp^����8�|�H����jX         <   x�3��4202�4�LB �D��\��@�������� ��)�%D�!vm&&�ĸb���� ��c      #   �  x�}�Mo�0����1��v>����XE��iVf�d��@��K)m7IC0���ˇ���X��	��آ2Ъ�
�������-�f@Q*k@�����h�k�P��,I�Me�m4�Ŗ|�je|P!��Q���y?O��O��&��ב��JT�e)��r9��P���l=��ŊE����G��l-�)��f���#�H��a��kHk�|a��[(��?6���D2�Cde��u2��-d[�%Aɔ��&����	���4���h��T�_�O�'�D}�b=�_���y��)/ �c9:�.�>���:�g�Y�"�5��丷�Bc"�;@��dg��i��%���s���j|N^���6�[�9�8�Kf�w�xs�`�;zŖ;�zi�K�Z��k���}Qo@���      =      x������ � �      !      x������ � �      ;      x������ � �            x������ � �            x������ � �      A      x������ � �      ?      x������ � �            x������ � �      )      x������ � �      1      x������ � �      3      x������ � �      5      x������ � �      7      x������ � �      9      x������ � �      +      x������ � �      -      x������ � �      /      x������ � �            x������ � �            x������ � �      G      x������ � �      E      x������ � �         �  x�}�ю� E�׏�8c[���Pd]6X�~��)����&��0s >꺆��[��[�&�M�h�y%{��M��P!!`C8Ϭ�+�#����$���N�5x&��Z������9�}-ؒ�%ԣ�J�)k��H%�넛l�;H�V�F�kČ�rP��-G1��6"����-u	�~�J.+I2SH35V����Ѓ���Ї ��f-!�7>�3� ���5���|p��%�@Rd`Kt�#�@�����y��љ�	�&/B́d�jx,�}W�Rp�,�-N��$�a�gI"¶O%@���{2��I��l��#����I%�P|nHq>�h��=��'/����S~���my�[���8����M~si�F��g}C|i�/JO�;܋�K!"_�UU��I}      K      x������ � �            x������ � �      '   J   x�m��� ѳ��4@d��ĵ����>�&%�d������̶��1Òuk��f��=�G0Ö"�Ve���F�"e      %      x������ � �      C      x������ � �      I      x������ � �         �  x��Q˒�0]�W�쮚��0Hu�4�@�z#�` [iA�~����L�Tv��<�^w�������8a:��{p] �n��ե8zsG��N �5e�8�M���:k��������Pyz�<����8O7���du"C�i������9����gaY\�*��I Bp<���d��xu;x%�6�@*�,��J��UCC�P���h��*s�d�xˣs百�K,$�uX�?���Ŀ��O�̣Ή��U�%�z�Qx��Ή��'#�ޡ]qߵ��y�J�J�-��-��TZM*�ű{I%��=�,6o��R�zq�<�p����t���m�-�҆9�@CCS�?��t��|f�sg,{�*�C���}y�Ѐv�_��ED�
��s�o<x��_]���HT%I�T��m�j�n�C��-���Ws���Z����w[���߾<Z�~n�.��Cd�ڍ��Lp�th��I�D���gQR�]f*��?���hs ��&����TC�     